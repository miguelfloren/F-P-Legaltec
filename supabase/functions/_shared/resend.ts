const RESEND_API_KEY   = Deno.env.get('RESEND_API_KEY')      ?? '';
const FROM_EMAIL       = Deno.env.get('RESEND_FROM_EMAIL')   ?? 'noreply@fplegaltec.es';
const NOTIFY_EMAIL     = Deno.env.get('RESEND_NOTIFY_EMAIL') ?? 'miguelfloren@gmail.com';
const ADMIN_URL        = Deno.env.get('ADMIN_DASHBOARD_URL') ?? 'https://fplegaltec.es/admin.html';

interface LeadData {
  nombre: string;
  email: string;
  telefono?: string;
  area: string;
  mensaje?: string;
  lead_id: string;
  source: string;
  resumen_ia?: string;
}

export async function sendLeadNotification(lead: LeadData): Promise<void> {
  await Promise.allSettled([
    sendEmail({
      to: NOTIFY_EMAIL,
      subject: `Nuevo lead: ${lead.nombre} — ${lead.area}`,
      html: `
        <h2 style="color:#1a2030">Nuevo lead recibido</h2>
        <table style="font-family:sans-serif;font-size:14px;border-collapse:collapse">
          <tr><td style="padding:6px 12px 6px 0;color:#666;font-weight:600">Nombre</td><td>${lead.nombre}</td></tr>
          <tr><td style="padding:6px 12px 6px 0;color:#666;font-weight:600">Email</td><td>${lead.email}</td></tr>
          <tr><td style="padding:6px 12px 6px 0;color:#666;font-weight:600">Teléfono</td><td>${lead.telefono || '—'}</td></tr>
          <tr><td style="padding:6px 12px 6px 0;color:#666;font-weight:600">Área</td><td>${lead.area}</td></tr>
          <tr><td style="padding:6px 12px 6px 0;color:#666;font-weight:600">Origen</td><td>${lead.source}</td></tr>
          <tr><td style="padding:6px 12px 6px 0;color:#666;font-weight:600">ID</td><td style="font-family:monospace;font-size:12px">${lead.lead_id}</td></tr>
        </table>
        ${lead.mensaje ? `<p style="font-family:sans-serif;font-size:14px;margin-top:16px"><strong>Mensaje:</strong><br>${lead.mensaje}</p>` : ''}
        ${lead.resumen_ia ? `<p style="font-family:sans-serif;font-size:14px;background:#f5f2ed;padding:12px;border-radius:8px"><strong>Resumen IA:</strong><br>${lead.resumen_ia}</p>` : ''}
        <p style="margin-top:20px"><a href="${ADMIN_URL}" style="background:#c98b62;color:white;padding:10px 20px;border-radius:24px;text-decoration:none;font-family:sans-serif;font-size:14px">Ver en panel admin</a></p>
      `,
    }),
    sendEmail({
      to: lead.email,
      subject: 'Hemos recibido su consulta — F&P Legaltec',
      html: `
        <div style="font-family:sans-serif;font-size:14px;color:#1a2030;max-width:560px">
          <h2 style="color:#1a2030">Consulta recibida</h2>
          <p>Estimado/a ${lead.nombre},</p>
          <p>Hemos recibido su consulta sobre <strong>${lead.area}</strong>. Nuestro equipo la revisará y le responderá en menos de 24 horas.</p>
          <p>Si necesita contactarnos urgentemente:</p>
          <ul>
            <li>Teléfono: <a href="tel:+34676594016">+34 676594016</a></li>
            <li>Email: <a href="mailto:miguelfloren@gmail.com">miguelfloren@gmail.com</a></li>
          </ul>
          <p>Horario: lunes a viernes, 9:00 – 21:00.</p>
          <p>Primera consulta siempre gratuita y sin compromiso.</p>
          <p>Atentamente,<br><strong>El equipo de F&P Legaltec</strong><br>Cuesta de San Francisco nº 5 Entlo</p>
          <hr style="border:none;border-top:1px solid #eee;margin:24px 0">
          <p style="font-size:12px;color:#999">Sus datos son tratados conforme al RGPD. Puede ejercer sus derechos en <a href="mailto:miguelfloren@gmail.com">miguelfloren@gmail.com</a>. <a href="https://fplegaltec.es/privacidad.html">Política de privacidad</a>.</p>
        </div>
      `,
    }),
  ]);
}

async function sendEmail({ to, subject, html }: { to: string; subject: string; html: string }) {
  const res = await fetch('https://api.resend.com/emails', {
    method: 'POST',
    headers: {
      'Authorization': `Bearer ${RESEND_API_KEY}`,
      'Content-Type': 'application/json',
    },
    body: JSON.stringify({ from: FROM_EMAIL, to: [to], subject, html }),
  });
  if (!res.ok) {
    console.error('Resend error:', await res.text());
  }
}
