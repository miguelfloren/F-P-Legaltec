import { createClient } from 'npm:@supabase/supabase-js@2';
import { z } from 'npm:zod@3';
import { corsHeaders } from '../_shared/cors.ts';
import { sendLeadNotification } from '../_shared/resend.ts';

const VALID_AREAS = [
  'general', 'laboral', 'civil', 'mercantil', 'penal', 'extranjeria',
  'rgpd', 'ciberseguridad', 'contratos-tech', 'startup', 'legaltech', 'otro',
] as const;

const LeadSchema = z.object({
  nombre:       z.string().min(1, 'Nombre requerido').max(100),
  email:        z.string().email('Email no válido'),
  telefono:     z.string().max(20).optional(),
  area:         z.enum(VALID_AREAS, { errorMap: () => ({ message: 'Área no válida' }) }),
  mensaje:      z.string().max(2000).optional(),
  consent_rgpd: z.literal(true, { errorMap: () => ({ message: 'El consentimiento RGPD es obligatorio' }) }),
  honeypot:     z.string(),
});

// Rate limit simple en memoria: máx 5 envíos/hora por IP
const rateMap = new Map<string, { count: number; resetAt: number }>();

function checkRateLimit(ip: string): boolean {
  const now = Date.now();
  const entry = rateMap.get(ip);
  if (!entry || now > entry.resetAt) {
    rateMap.set(ip, { count: 1, resetAt: now + 3_600_000 });
    return true;
  }
  if (entry.count >= 5) return false;
  entry.count++;
  return true;
}

async function hashIp(ip: string): Promise<string> {
  const salt = Deno.env.get('IP_HASH_SALT') ?? '';
  const data = new TextEncoder().encode(ip + salt);
  const buf  = await crypto.subtle.digest('SHA-256', data);
  return Array.from(new Uint8Array(buf)).map(b => b.toString(16).padStart(2, '0')).join('');
}

function json(body: unknown, status = 200) {
  return new Response(JSON.stringify(body), {
    status,
    headers: { ...corsHeaders, 'Content-Type': 'application/json' },
  });
}

Deno.serve(async (req) => {
  if (req.method === 'OPTIONS') {
    return new Response(null, { headers: corsHeaders });
  }

  if (req.method !== 'POST') {
    return json({ ok: false, error: 'Method not allowed' }, 405);
  }

  try {
    const ip = req.headers.get('x-forwarded-for')?.split(',')[0].trim() ?? 'unknown';

    if (!checkRateLimit(ip)) {
      return json({ ok: false, error: 'Demasiadas solicitudes. Inténtelo más tarde.' }, 429);
    }

    const body = await req.json().catch(() => null);
    if (!body) return json({ ok: false, error: 'JSON inválido' }, 400);

    // Honeypot: campo oculto rellenado = bot. Respuesta 200 silenciosa.
    if (body.honeypot) {
      return json({ ok: true, lead_id: null });
    }

    const parsed = LeadSchema.safeParse(body);
    if (!parsed.success) {
      return json({ ok: false, error: parsed.error.issues[0].message }, 400);
    }

    const { nombre, email, telefono, area, mensaje } = parsed.data;
    const ipHash = await hashIp(ip);

    const supabase = createClient(
      Deno.env.get('SUPABASE_URL')!,
      Deno.env.get('SUPABASE_SERVICE_ROLE_KEY')!,
    );

    const { data: lead, error: dbError } = await supabase
      .from('leads')
      .insert({
        source:       'formulario',
        status:       'nuevo',
        nombre,
        email,
        telefono:     telefono || null,
        area,
        mensaje:      mensaje  || null,
        consent_rgpd: true,
        ip_hash:      ipHash,
      })
      .select('id')
      .single();

    if (dbError) {
      console.error('DB insert error:', dbError);
      return json({ ok: false, error: 'Error interno. Por favor, contáctenos directamente.' }, 500);
    }

    // Emails en background — no bloqueamos la respuesta
    sendLeadNotification({ nombre, email, telefono, area, mensaje, lead_id: lead.id, source: 'formulario' })
      .catch(err => console.error('Email error:', err));

    return json({ ok: true, lead_id: lead.id });

  } catch (err) {
    console.error('Unexpected error:', err);
    return json({ ok: false, error: 'Error interno.' }, 500);
  }
});
