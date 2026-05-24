-- Estados del lead
create type lead_status as enum ('nuevo', 'contactado', 'cualificado', 'cerrado_ganado', 'cerrado_perdido');

-- Origen del lead
create type lead_source as enum ('formulario', 'agente_ia');

-- Tabla principal de leads
create table public.leads (
  id              uuid primary key default gen_random_uuid(),
  created_at      timestamptz not null default now(),
  source          lead_source not null,
  status          lead_status not null default 'nuevo',

  -- Datos del cliente
  nombre          text not null,
  email           text not null,
  telefono        text,
  area            text not null,
  mensaje         text,

  -- Solo agente IA
  resumen_ia      text,
  urgencia        text check (urgencia in ('baja', 'media', 'alta', null)),
  chat_session_id uuid,

  -- Consentimiento RGPD
  consent_rgpd    boolean not null,
  consent_at      timestamptz not null default now(),
  ip_hash         text,

  -- Gestión interna
  notas_internas  text,
  contactado_at   timestamptz,
  cerrado_at      timestamptz
);

create index idx_leads_status  on public.leads(status);
create index idx_leads_created on public.leads(created_at desc);

-- Sesiones de chat con el agente
create table public.chat_sessions (
  id          uuid primary key default gen_random_uuid(),
  created_at  timestamptz not null default now(),
  ended_at    timestamptz,
  lead_id     uuid references public.leads(id) on delete set null,
  user_agent  text,
  ip_hash     text
);

-- Mensajes de cada sesión (auditoría)
create table public.messages (
  id          uuid primary key default gen_random_uuid(),
  session_id  uuid not null references public.chat_sessions(id) on delete cascade,
  created_at  timestamptz not null default now(),
  role        text not null check (role in ('user', 'assistant', 'system', 'tool')),
  content     text not null,
  tool_name   text,
  tool_input  jsonb,
  tool_result jsonb
);

create index idx_messages_session on public.messages(session_id, created_at);

-- FK diferida: chat_session_id en leads apunta a chat_sessions
-- (se conoce a posteriori — el lead se crea al cerrar la sesión de chat)
alter table public.leads
  add constraint fk_leads_chat_session
  foreign key (chat_session_id) references public.chat_sessions(id) on delete set null;

-- ── RLS ──────────────────────────────────────────────────────────
-- Las Edge Functions usan service_role, que bypasea RLS.
-- Bloqueamos acceso anon directo desde el navegador.
alter table public.leads          enable row level security;
alter table public.chat_sessions  enable row level security;
alter table public.messages       enable row level security;

-- Miguel (authenticated) puede leer y actualizar leads
create policy "admin lee leads"
  on public.leads for select
  to authenticated
  using (true);

create policy "admin actualiza leads"
  on public.leads for update
  to authenticated
  using (true);

create policy "admin lee sesiones"
  on public.chat_sessions for select
  to authenticated
  using (true);

create policy "admin lee mensajes"
  on public.messages for select
  to authenticated
  using (true);

-- Sin policy de INSERT para anon → denegado por defecto.
-- Los inserts van por Edge Function con service_role.
