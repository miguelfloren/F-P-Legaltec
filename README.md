# F&P Legaltec — Web corporativa

Landing estática del despacho F&P Legaltec. Sin framework, sin build step.

## Stack

| Capa | Herramienta |
|------|-------------|
| Hosting | Cloudflare Pages (deploy desde GitHub) |
| Dominio | Hostinger → DNS apunta a Cloudflare Pages |
| Base de datos | Supabase Postgres |
| Backend | Supabase Edge Functions (Deno/TypeScript) |
| Email | Resend |
| Agente IA | Claude Haiku 4.5 (`claude-haiku-4-5-20251001`) |
| Auth admin | Supabase Auth |

## Estructura

```
F-P-Legaltec/
├── index.html          # Landing principal
├── css/
│   └── main.css        # Estilos globales
├── js/
│   └── form.js         # Smooth scroll, nav, formulario, reveal
├── assets/
│   ├── logo-legaltec.png
│   └── despacho-hero.webp
├── .env.example        # Variables de entorno necesarias (Fase 2)
└── docs/
    └── PRP-fp-legaltec-leads-y-agente.pdf
```

## Desarrollo local

No hay build step. Abrir `index.html` directamente en el navegador o usar cualquier servidor estático:

```bash
npx serve .
# o
python3 -m http.server 8080
```

## Variables de entorno

Copiar `.env.example` a `.env` y rellenar los valores antes de desplegar las Edge Functions (Fase 2).

## Fases

- **Fase 1** ✅ Refactor cosmético: CSS/JS extraídos a archivos externos
- **Fase 2** — Formulario operativo (Supabase + Resend), agente IA, botón WhatsApp, panel `/admin`
