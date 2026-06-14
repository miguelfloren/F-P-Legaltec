<?php
$title       = 'Protección de Datos y RGPD para empresas en Lorca, Murcia | F&P Legaltec';
$description = 'Auditorías RGPD, registro de actividades, DPD y gestión de brechas de seguridad para empresas en Lorca y Murcia. Especialistas en protección de datos con enfoque legaltech. Primera consulta gratuita.';
$canonical   = 'https://pflegaltec.com/legaltech/proteccion-datos-rgpd/';
$ogImage     = 'https://pflegaltec.com/assets/og-legaltech.jpg';

$jsonLd = json_encode([
  '@context'   => 'https://schema.org',
  '@type'      => 'LegalService',
  'name'       => 'Protección de Datos y RGPD — F&P Legaltec',
  'description'=> 'Auditorías de cumplimiento RGPD, registro de actividades de tratamiento, delegado de protección de datos externo y gestión de brechas de seguridad para empresas y autónomos en Lorca, Murcia.',
  'url'        => 'https://pflegaltec.com/legaltech/proteccion-datos-rgpd/',
  'telephone'  => '+34676594016',
  'email'      => 'info@pflegaltec.com',
  'address'    => [
    '@type'           => 'PostalAddress',
    'streetAddress'   => 'Cuesta de San Francisco nº 5 Entlo',
    'addressLocality' => 'Lorca',
    'addressRegion'   => 'Murcia',
    'postalCode'      => '30800',
    'addressCountry'  => 'ES',
  ],
  'areaServed'   => ['Lorca', 'Murcia', 'España'],
  'priceRange'   => 'Consulta gratuita',
  'openingHours' => 'Mo-Fr 09:00-21:00',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$extraHead = <<<'HTML'
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,600&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Inicio","item":"https://pflegaltec.com/"},{"@type":"ListItem","position":2,"name":"Legaltech","item":"https://pflegaltec.com/legaltech/"},{"@type":"ListItem","position":3,"name":"Protección de Datos y RGPD","item":"https://pflegaltec.com/legaltech/proteccion-datos-rgpd/"}]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"¿Todas las empresas están obligadas a cumplir el RGPD?","acceptedAnswer":{"@type":"Answer","text":"Sí. Cualquier empresa, autónomo u organización que trate datos personales de ciudadanos de la UE debe cumplir el RGPD, independientemente de su tamaño o sector. La Ley Orgánica 3/2018 (LOPDGDD) lo complementa en España."}},{"@type":"Question","name":"¿Cuánto puede costar una sanción por incumplimiento del RGPD?","acceptedAnswer":{"@type":"Answer","text":"Las sanciones alcanzan hasta 20 millones de euros o el 4% de la facturación global anual, según cuál sea mayor."}},{"@type":"Question","name":"¿Qué es un DPD y cuándo es obligatorio?","acceptedAnswer":{"@type":"Answer","text":"El Delegado de Protección de Datos (DPD) es obligatorio para autoridades públicas, empresas que realizan tratamientos a gran escala de datos sensibles o que monitorizan sistemáticamente a personas. F&P Legaltec ofrece el servicio de DPD externo."}},{"@type":"Question","name":"¿Cuánto tiempo lleva una auditoría RGPD?","acceptedAnswer":{"@type":"Answer","text":"Para una pyme, el proceso completo suele resolverse en entre 3 y 6 semanas."}}]}
</script>
<style>
  /* ── TOKENS ── */
  :root {
    --navy:        #0d1117;
    --navy-mid:    #131a23;
    --navy-light:  #1c2634;
    --navy-border: #253044;
    --gold:        #c8a96e;
    --gold-light:  #e2c98b;
    --gold-dim:    rgba(200,169,110,.15);
    --teal:        #3ecfb2;
    --teal-dim:    rgba(62,207,178,.12);
    --white:       #f4f0ea;
    --gray:        #8a96a8;
    --text:        #cdd4de;
    --serif:       'Cormorant Garamond', Georgia, serif;
    --sans:        'DM Sans', system-ui, sans-serif;
    --radius:      6px;
    --max:         1160px;
    --transition:  .25s cubic-bezier(.4,0,.2,1);
  }

  body {
    background: var(--navy);
    color: var(--text);
    font-family: var(--sans);
    font-size: 16px;
    line-height: 1.7;
    -webkit-font-smoothing: antialiased;
  }

  /* Push content below fixed nav + overflowing logo (96px + 6px margin-top = 102px) */
  main { padding-top: 110px; }

  .container { max-width: var(--max); margin: 0 auto; padding: 0 24px; }
  .sr-only { position: absolute; width: 1px; height: 1px; overflow: hidden; clip: rect(0,0,0,0); }

  /* ── NAV OVERRIDE for dark page ── */
  .nav { background: rgba(13,17,23,.92); border-bottom-color: var(--navy-border); }
  .nav::after { display: none; }
  .nav-link { color: var(--gray); }
  .nav-link:hover { color: var(--white); }

  /* ── BREADCRUMB ── */
  .breadcrumb {
    padding: 14px 0;
    border-bottom: 1px solid var(--navy-border);
  }
  .breadcrumb ol {
    display: flex; align-items: center; gap: 8px;
    list-style: none; font-size: 13px; color: var(--gray);
  }
  .breadcrumb a { color: var(--gray); text-decoration: none; transition: color var(--transition); }
  .breadcrumb a:hover { color: var(--gold); }
  .breadcrumb li:not(:last-child)::after { content: '›'; margin-left: 8px; }
  .breadcrumb li:last-child { color: var(--gold); }

  /* ── HERO ── */
  .hero {
    position: relative; overflow: hidden;
    padding: 88px 0 80px; min-height: auto;
    border-bottom: 1px solid var(--navy-border);
    background: var(--navy);
    display: block; align-items: unset;
  }
  .hero::before {
    content: '';
    position: absolute; inset: 0;
    background:
      radial-gradient(ellipse 60% 50% at 70% 50%, rgba(62,207,178,.07) 0%, transparent 70%),
      radial-gradient(ellipse 40% 60% at 10% 80%, rgba(200,169,110,.06) 0%, transparent 60%);
    pointer-events: none;
  }
  .hero::after {
    content: 'RGPD';
    position: absolute; right: -20px; top: 50%;
    transform: translateY(-50%);
    font-family: var(--serif);
    font-size: clamp(120px, 16vw, 220px);
    font-weight: 700;
    color: rgba(200,169,110,.04);
    pointer-events: none; white-space: nowrap; line-height: 1;
  }
  .hero-inner {
    position: relative;
    max-width: var(--max); margin: 0 auto; padding: 0 24px;
    display: grid; grid-template-columns: 1fr auto;
    gap: 60px; align-items: center;
  }
  .hero-badge {
    display: inline-flex; align-items: center; gap: 8px;
    background: var(--teal-dim);
    border: 1px solid rgba(62,207,178,.25);
    color: var(--teal);
    font-size: 11.5px; font-weight: 600;
    letter-spacing: .08em; text-transform: uppercase;
    padding: 6px 14px; border-radius: 40px; margin-bottom: 24px;
  }
  .hero-badge svg { width: 13px; height: 13px; }
  h1 {
    font-family: var(--serif);
    font-size: clamp(38px, 5.5vw, 62px);
    font-weight: 700; color: var(--white);
    line-height: 1.1; letter-spacing: -.02em; margin-bottom: 20px;
  }
  h1 em { font-style: italic; color: var(--gold); }
  .hero-desc {
    font-size: 17px; color: var(--text);
    max-width: 560px; line-height: 1.7; margin-bottom: 36px;
  }
  .hero-actions { display: flex; align-items: center; gap: 16px; flex-wrap: wrap; }
  .btn-primary {
    display: inline-flex; align-items: center; gap: 8px;
    background: var(--gold); color: var(--navy);
    text-decoration: none; font-weight: 600; font-size: 14.5px;
    padding: 14px 28px; border-radius: var(--radius);
    transition: background var(--transition), transform var(--transition);
  }
  .btn-primary:hover { background: var(--gold-light); transform: translateY(-1px); }
  .btn-ghost {
    display: inline-flex; align-items: center; gap: 8px;
    color: var(--text); text-decoration: none;
    font-weight: 500; font-size: 14.5px;
    padding: 14px 24px;
    border: 1px solid var(--navy-border); border-radius: var(--radius);
    transition: border-color var(--transition), color var(--transition);
  }
  .btn-ghost:hover { border-color: var(--gold); color: var(--gold); }
  .hero-stats { display: flex; flex-direction: column; gap: 16px; flex-shrink: 0; }
  .stat-card {
    background: var(--navy-light);
    border: 1px solid var(--navy-border);
    border-radius: 10px; padding: 22px 28px;
    text-align: center; min-width: 160px;
  }
  .stat-card .stat-num {
    font-family: var(--serif); font-size: 36px; font-weight: 700;
    color: var(--gold); line-height: 1; margin-bottom: 4px;
  }
  .stat-card .stat-label {
    font-size: 12px; color: var(--gray);
    letter-spacing: .04em; text-transform: uppercase;
  }

  /* ── INTRO ALERT ── */
  .intro-alert {
    background: var(--navy-light);
    border-left: 4px solid var(--gold);
    border-radius: 0 var(--radius) var(--radius) 0;
    padding: 20px 28px; margin: 56px 0;
    display: flex; align-items: flex-start; gap: 16px;
  }
  .intro-alert svg { flex-shrink: 0; margin-top: 2px; color: var(--gold); }
  .intro-alert p { font-size: 15px; color: var(--text); line-height: 1.65; }
  .intro-alert strong { color: var(--white); }

  /* ── SECTIONS ── */
  section { padding: 80px 0; }
  section { background: var(--navy); }
  section + section { border-top: 1px solid var(--navy-border); }

  /* Light sections */
  section.section-light {
    background: #f5f2ed;
    border-top-color: rgba(26,32,48,0.10);
  }
  section.section-light h2 { color: #1a2030; }
  section.section-light h2 em { color: var(--copper); }
  section.section-light .section-label { color: var(--copper); }
  section.section-light .section-intro { color: rgba(26,32,48,0.60); }
  section.section-light .service-card {
    background: #ffffff;
    border-color: rgba(26,32,48,0.10);
  }
  section.section-light .service-card:hover { border-color: var(--copper); }
  section.section-light .service-card::before { background: linear-gradient(90deg, var(--copper), transparent); }
  section.section-light .service-card h3 { color: #1a2030; }
  section.section-light .service-card p { color: rgba(26,32,48,0.60); }
  section.section-light .service-card ul li { color: rgba(26,32,48,0.75); }
  section.section-light .service-card ul li::before { color: var(--copper); }
  section.section-light .service-icon { background: rgba(201,139,98,0.12); color: var(--copper); }
  section.section-light .process-grid { border-color: rgba(26,32,48,0.10); }
  section.section-light .process-step { border-right-color: rgba(26,32,48,0.10); border-top-color: rgba(26,32,48,0.10); border-bottom-color: rgba(26,32,48,0.10); }
  section.section-light .step-num { color: rgba(26,32,48,0.15); }
  section.section-light .process-step:hover .step-num { color: var(--copper); }
  section.section-light .process-step h3 { color: #1a2030; }
  section.section-light .process-step p { color: rgba(26,32,48,0.60); }
  section.section-light .why-item-text h3 { color: #1a2030; }
  section.section-light .why-item-text p { color: rgba(26,32,48,0.60); }
  section.section-light .why-bullet { background: rgba(201,139,98,0.12); color: var(--copper); }
  section.section-light .why-cta-box { background: #ffffff; border-color: rgba(26,32,48,0.10); }
  section.section-light .why-cta-box blockquote { color: #1a2030; }
  section.section-light .why-cta-box cite { color: rgba(26,32,48,0.55); }
  section.section-light .faq-item { border-bottom-color: rgba(26,32,48,0.10); }
  section.section-light .faq-item:first-child { border-top-color: rgba(26,32,48,0.10); }
  section.section-light .faq-question { color: #1a2030; }
  section.section-light .faq-question:hover { color: var(--copper); }
  section.section-light .faq-item.open .faq-question { color: var(--copper); }
  section.section-light .faq-icon { border-color: rgba(26,32,48,0.20); color: rgba(26,32,48,0.40); }
  section.section-light .faq-item.open .faq-icon { border-color: var(--copper); color: var(--copper); }
  section.section-light .faq-answer-inner { color: rgba(26,32,48,0.60); }
  section.section-light .related-card { background: #ffffff; border-color: rgba(26,32,48,0.10); }
  section.section-light .related-card:hover { border-color: var(--copper); }
  section.section-light .related-card h3 { color: #1a2030; }
  section.section-light .related-card p { color: rgba(26,32,48,0.60); }
  section.section-light .related-tag { color: var(--copper); }
  section.section-light .related-link { color: var(--copper); }
  .section-label {
    display: inline-block; font-size: 11px; font-weight: 600;
    letter-spacing: .12em; text-transform: uppercase;
    color: var(--teal); margin-bottom: 14px;
  }
  h2 {
    font-family: var(--serif);
    font-size: clamp(28px, 4vw, 44px); font-weight: 700;
    color: var(--white); line-height: 1.15;
    letter-spacing: -.02em; margin-bottom: 16px;
  }
  h2 em { font-style: italic; color: var(--gold); }
  .section-intro {
    font-size: 16px; color: var(--gray);
    max-width: 600px; line-height: 1.7; margin-bottom: 52px;
  }

  /* ── SERVICES GRID ── */
  .services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 20px;
  }
  .service-card {
    background: var(--navy-mid);
    border: 1px solid var(--navy-border);
    border-radius: 10px; padding: 30px;
    transition: border-color var(--transition), transform var(--transition);
    position: relative; overflow: hidden;
  }
  .service-card::before {
    content: ''; position: absolute;
    top: 0; left: 0; right: 0; height: 2px;
    background: linear-gradient(90deg, var(--gold), transparent);
    opacity: 0; transition: opacity var(--transition);
  }
  .service-card:hover { border-color: rgba(200,169,110,.4); transform: translateY(-3px); }
  .service-card:hover::before { opacity: 1; }
  .service-icon {
    width: 46px; height: 46px; background: var(--gold-dim);
    border-radius: 8px; display: flex; align-items: center;
    justify-content: center; margin-bottom: 18px; color: var(--gold);
  }
  .service-card h3 {
    font-family: var(--serif); font-size: 20px; font-weight: 600;
    color: var(--white); margin-bottom: 10px;
  }
  .service-card p { font-size: 14px; color: var(--gray); line-height: 1.65; }
  .service-card ul {
    list-style: none; margin-top: 16px;
    display: flex; flex-direction: column; gap: 7px;
  }
  .service-card ul li {
    font-size: 13.5px; color: var(--text);
    display: flex; align-items: flex-start; gap: 8px;
  }
  .service-card ul li::before {
    content: '›'; color: var(--gold);
    font-size: 16px; line-height: 1.3; flex-shrink: 0;
  }

  /* ── PROCESS ── */
  .process-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
    gap: 0; border: 1px solid var(--navy-border);
    border-radius: 12px; overflow: hidden;
  }
  .process-step {
    padding: 32px 28px;
    border-right: 1px solid var(--navy-border);
  }
  .process-step:last-child { border-right: none; }
  .process-step:nth-child(n+5) { border-top: 1px solid var(--navy-border); }
  .step-num {
    font-family: var(--serif); font-size: 48px; font-weight: 700;
    color: var(--navy-border); line-height: 1; margin-bottom: 12px;
    transition: color var(--transition);
  }
  .process-step:hover .step-num { color: var(--gold); }
  .process-step h3 {
    font-family: var(--serif); font-size: 17px; font-weight: 600;
    color: var(--white); margin-bottom: 8px;
  }
  .process-step p { font-size: 13.5px; color: var(--gray); line-height: 1.6; }

  /* ── SANCTION BOX ── */
  .sanction-box {
    background: var(--navy-mid); border: 1px solid var(--navy-border);
    border-radius: 12px; overflow: hidden;
    display: grid; grid-template-columns: 1fr 1fr;
  }
  .sanction-content { padding: 48px; }
  .sanction-content h2 { margin-bottom: 18px; }
  .sanction-content p { font-size: 15px; color: var(--gray); line-height: 1.7; margin-bottom: 16px; }
  .sanction-amounts {
    background: var(--navy-light); padding: 48px;
    display: flex; flex-direction: column;
    justify-content: center; gap: 28px;
    border-left: 1px solid var(--navy-border);
  }
  .amount-figure {
    font-family: var(--serif); font-size: 40px; font-weight: 700;
    color: var(--gold); line-height: 1; margin-bottom: 6px;
  }
  .amount-label { font-size: 13px; color: var(--gray); }
  .amount-divider { height: 1px; background: var(--navy-border); }

  /* ── WHY US ── */
  .why-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center; }
  .why-list { display: flex; flex-direction: column; gap: 20px; }
  .why-item { display: flex; gap: 16px; align-items: flex-start; }
  .why-bullet {
    width: 36px; height: 36px; background: var(--gold-dim);
    border-radius: 50%; display: flex; align-items: center;
    justify-content: center; color: var(--gold); flex-shrink: 0;
    font-family: var(--serif); font-weight: 700; font-size: 14px;
  }
  .why-item-text h3 {
    font-family: var(--serif); font-size: 18px; font-weight: 600;
    color: var(--white); margin-bottom: 4px;
  }
  .why-item-text p { font-size: 14px; color: var(--gray); line-height: 1.65; }
  .why-cta-box {
    background: var(--navy-light); border: 1px solid var(--navy-border);
    border-radius: 12px; padding: 44px; text-align: center;
  }
  .why-cta-box .big-quote {
    font-family: var(--serif); font-size: 72px; font-weight: 700;
    color: var(--gold-dim); line-height: .8; margin-bottom: 16px;
  }
  .why-cta-box blockquote {
    font-family: var(--serif); font-size: 22px; font-style: italic;
    color: var(--white); line-height: 1.4; margin-bottom: 28px;
  }
  .why-cta-box cite {
    font-size: 13px; color: var(--gray); font-style: normal;
    display: block; margin-bottom: 32px;
  }

  /* ── FAQ ── */
  .faq-list { display: flex; flex-direction: column; gap: 0; }
  .faq-item { border-bottom: 1px solid var(--navy-border); }
  .faq-item:first-child { border-top: 1px solid var(--navy-border); }
  .faq-question {
    width: 100%; background: none; border: none; color: var(--white);
    font-family: var(--serif); font-size: 19px; font-weight: 600;
    text-align: left; padding: 24px 0; cursor: pointer;
    display: flex; align-items: center; justify-content: space-between; gap: 16px;
    transition: color var(--transition);
  }
  .faq-question:hover { color: var(--gold); }
  .faq-question .faq-icon {
    width: 28px; height: 28px; border: 1px solid var(--navy-border);
    border-radius: 50%; display: flex; align-items: center;
    justify-content: center; flex-shrink: 0; color: var(--gray);
    font-size: 18px; transition: all var(--transition);
  }
  .faq-item.open .faq-question { color: var(--gold); }
  .faq-item.open .faq-icon { border-color: var(--gold); color: var(--gold); transform: rotate(45deg); }
  .faq-answer { overflow: hidden; max-height: 0; transition: max-height .4s cubic-bezier(.4,0,.2,1); }
  .faq-answer-inner {
    padding-bottom: 24px; font-size: 15px; color: var(--gray);
    line-height: 1.7; max-width: 720px;
  }

  /* ── CTA BANNER ── */
  .cta-banner {
    background: var(--navy-mid); border: 1px solid var(--navy-border);
    border-radius: 12px; padding: 60px 56px;
    display: grid; grid-template-columns: 1fr auto;
    gap: 40px; align-items: center;
    position: relative; overflow: hidden; margin: 80px 0;
  }
  .cta-banner::before {
    content: ''; position: absolute; inset: 0;
    background: radial-gradient(ellipse 60% 80% at 100% 50%, var(--gold-dim) 0%, transparent 70%);
    pointer-events: none;
  }
  .cta-banner h2 { font-size: clamp(24px, 3.5vw, 38px); margin-bottom: 12px; }
  .cta-banner p { font-size: 15px; color: var(--gray); }
  .cta-actions { display: flex; flex-direction: column; gap: 12px; align-items: center; flex-shrink: 0; }
  .cta-note { font-size: 11.5px; color: var(--gray); text-align: center; }

  /* ── RELATED ── */
  .related-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; }
  .related-card {
    background: var(--navy-mid); border: 1px solid var(--navy-border);
    border-radius: 10px; padding: 28px; text-decoration: none;
    transition: border-color var(--transition), transform var(--transition); display: block;
  }
  .related-card:hover { border-color: rgba(200,169,110,.4); transform: translateY(-2px); }
  .related-tag {
    font-size: 10.5px; font-weight: 600; letter-spacing: .1em;
    text-transform: uppercase; color: var(--teal); margin-bottom: 10px;
  }
  .related-card h3 {
    font-family: var(--serif); font-size: 18px; font-weight: 600;
    color: var(--white); margin-bottom: 8px;
  }
  .related-card p { font-size: 13px; color: var(--gray); line-height: 1.6; }
  .related-link {
    display: inline-flex; align-items: center; gap: 5px;
    margin-top: 14px; font-size: 13px; color: var(--gold); font-weight: 500;
  }

  /* ── FOOTER OVERRIDE ── */
  .footer { background: var(--navy-mid); border-top: 1px solid var(--navy-border); }
  .footer-logo { color: var(--gold); }
  .footer-col h4 { color: var(--gold); }

  /* ── RESPONSIVE ── */
  @media (max-width: 900px) {
    .hero-inner { grid-template-columns: 1fr; }
    .hero-stats { flex-direction: row; }
    .sanction-box { grid-template-columns: 1fr; }
    .sanction-amounts { border-left: none; border-top: 1px solid var(--navy-border); }
    .why-grid { grid-template-columns: 1fr; }
    .cta-banner { grid-template-columns: 1fr; }
    .related-grid { grid-template-columns: 1fr; }
    .process-grid { grid-template-columns: 1fr 1fr; }
    .process-step { border-right: none !important; border-bottom: 1px solid var(--navy-border); }
    .process-step:last-child { border-bottom: none; }
  }
  @media (max-width: 600px) {
    section { padding: 56px 0; }
    .hero { padding: 56px 0 48px; }
    .hero-stats { flex-wrap: wrap; }
    .cta-banner { padding: 40px 28px; }
    h1 { font-size: 36px; }
    .process-grid { grid-template-columns: 1fr; }
  }
</style>
HTML;

require_once __DIR__ . '/../partials/head.php';
require_once __DIR__ . '/../partials/nav.php';
?>

<main>

  <!-- ── BREADCRUMB ── -->
  <div class="breadcrumb">
    <div class="container">
      <ol aria-label="Ruta de navegación">
        <li><a href="/">Inicio</a></li>
        <li><a href="/legaltech/">Legaltech</a></li>
        <li aria-current="page">Protección de datos y RGPD</li>
      </ol>
    </div>
  </div>

  <!-- ── HERO ── -->
  <header class="hero">
    <div class="hero-inner">
      <div class="hero-content">
        <div class="hero-badge">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          Legaltech · Privacidad y datos
        </div>
        <h1>Protección de datos<br />y <em>cumplimiento RGPD</em><br />para empresas</h1>
        <p class="hero-desc">
          Auditamos su organización, documentamos sus procesos y le mantenemos en cumplimiento permanente con el Reglamento General de Protección de Datos. Combinamos experiencia jurídica de más de tres décadas con herramientas legaltech para una protección real y eficiente.
        </p>
        <div class="hero-actions">
          <a href="/#contacto" class="btn-primary">
            Solicitar consulta gratuita
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="#servicios-rgpd" class="btn-ghost">Ver todos los servicios</a>
        </div>
      </div>
      <div class="hero-stats" aria-label="Datos destacados">
        <div class="stat-card">
          <div class="stat-num">+30</div>
          <div class="stat-label">Años de experiencia</div>
        </div>
        <div class="stat-card">
          <div class="stat-num">72h</div>
          <div class="stat-label">Para notificar una brecha</div>
        </div>
        <div class="stat-card">
          <div class="stat-num">−75%</div>
          <div class="stat-label">Reducción de sanción lograda</div>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
    <!-- ── INTRO ALERT ── -->
    <div class="intro-alert" role="note">
      <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
      <p>
        <strong>El RGPD no es opcional.</strong> Desde mayo de 2018, toda empresa, autónomo u organización que trate datos personales de ciudadanos de la UE está obligada a cumplirlo, independientemente de su tamaño. La <strong>Ley Orgánica 3/2018 (LOPDGDD)</strong> lo complementa en España y amplía sus exigencias para determinados tratamientos. No actuar tiene consecuencias: sanciones que pueden llegar al 4% de la facturación global anual.
      </p>
    </div>
  </div>

  <!-- ── SERVICES ── -->
  <section id="servicios-rgpd" class="section-light" aria-labelledby="srv-title">
    <div class="container">
      <span class="section-label">Qué hacemos</span>
      <h2 id="srv-title">Servicios de protección<br />de datos <em>a medida</em></h2>
      <p class="section-intro">No existen dos empresas iguales. Analizamos su situación específica y diseñamos una solución que le proteja de verdad, sin burocracia vacía.</p>
      <div class="services-grid" role="list">

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg>
          </div>
          <h3>Auditoría de cumplimiento RGPD</h3>
          <p>Diagnóstico completo de su situación real frente al reglamento, identificando brechas y riesgos con priorización por impacto.</p>
          <ul>
            <li>Inventario de tratamientos de datos</li>
            <li>Análisis de bases jurídicas aplicadas</li>
            <li>Evaluación de medidas de seguridad</li>
            <li>Informe de riesgos con hoja de ruta</li>
          </ul>
        </article>

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
          </div>
          <h3>Registro de actividades de tratamiento</h3>
          <p>Elaboración del RAT conforme al artículo 30 del RGPD: documento esencial ante cualquier inspección de la AEPD.</p>
          <ul>
            <li>Identificación y descripción de cada tratamiento</li>
            <li>Finalidades, bases jurídicas y plazos</li>
            <li>Categorías de destinatarios y transferencias</li>
            <li>Mantenimiento y actualización continua</li>
          </ul>
        </article>

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="8" r="4"/><path d="M20 21a8 8 0 10-16 0"/></svg>
          </div>
          <h3>Delegado de Protección de Datos externo</h3>
          <p>Servicio de DPD externo para organizaciones obligadas o que buscan una figura independiente, experta y sin coste de contratación fija.</p>
          <ul>
            <li>Punto de contacto con la AEPD</li>
            <li>Supervisión del cumplimiento continuo</li>
            <li>Asesoramiento en nuevos proyectos</li>
            <li>Formación y sensibilización del equipo</li>
          </ul>
        </article>

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
          </div>
          <h3>Gestión de brechas de seguridad</h3>
          <p>Respuesta inmediata ante incidentes: el RGPD exige notificar a la AEPD en 72 horas. Coordinamos la respuesta técnica y jurídica.</p>
          <ul>
            <li>Gestión de la crisis en tiempo real</li>
            <li>Notificación a la AEPD en plazo legal</li>
            <li>Comunicación a afectados cuando procede</li>
            <li>Documentación para minimizar la sanción</li>
          </ul>
        </article>

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
          </div>
          <h3>Adecuación de web y app</h3>
          <p>Revisión y redacción de los textos legales de su presencia digital, con validez ante los organismos reguladores.</p>
          <ul>
            <li>Política de privacidad conforme al RGPD</li>
            <li>Aviso legal y política de cookies</li>
            <li>Gestión del consentimiento (banners)</li>
            <li>Formularios y cláusulas de recogida de datos</li>
          </ul>
        </article>

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
          </div>
          <h3>Evaluación de Impacto (EIPD)</h3>
          <p>Análisis obligatorio para tratamientos de alto riesgo: videovigilancia, perfilado, datos sensibles a gran escala o nuevas tecnologías.</p>
          <ul>
            <li>Descripción detallada del tratamiento</li>
            <li>Evaluación de necesidad y proporcionalidad</li>
            <li>Identificación y gestión de riesgos</li>
            <li>Consulta previa a la AEPD si procede</li>
          </ul>
        </article>

      </div>
    </div>
  </section>

  <!-- ── PROCESS ── -->
  <section aria-labelledby="proc-title">
    <div class="container">
      <span class="section-label">Cómo trabajamos</span>
      <h2 id="proc-title">Del diagnóstico al<br /><em>cumplimiento real</em></h2>
      <p class="section-intro">Un proceso estructurado y eficiente. Para una pyme estándar, el cumplimiento íntegro se alcanza en 3 a 6 semanas.</p>
      <div class="process-grid" role="list">
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">01</div>
          <h3>Diagnóstico inicial</h3>
          <p>Reunión gratuita para entender su actividad, qué datos trata, cómo los gestiona y qué riesgos existen. Sin compromiso.</p>
        </div>
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">02</div>
          <h3>Análisis documental</h3>
          <p>Revisamos contratos, formularios, sistemas informáticos y medidas de seguridad existentes. Usamos herramientas automatizadas para acelerar el proceso.</p>
        </div>
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">03</div>
          <h3>Plan de adecuación</h3>
          <p>Elaboramos un plan de acción priorizado con todos los cambios necesarios, ordenados por impacto y esfuerzo.</p>
        </div>
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">04</div>
          <h3>Implementación</h3>
          <p>Redactamos la documentación obligatoria, formamos a su equipo y adaptamos sus procesos internos.</p>
        </div>
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">05</div>
          <h3>Certificación interna</h3>
          <p>Entregamos el RAT completo, las políticas actualizadas y el registro de cumplimiento listo para cualquier inspección.</p>
        </div>
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">06</div>
          <h3>Mantenimiento continuo</h3>
          <p>El RGPD no es un proyecto puntual. Le ofrecemos revisión periódica y respuesta inmediata ante cambios normativos o incidentes.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ── SANCIONES ── -->
  <section aria-labelledby="sanc-title">
    <div class="container">
      <div class="sanction-box" role="region" aria-label="Información sobre sanciones RGPD">
        <div class="sanction-content">
          <span class="section-label">Riesgo real</span>
          <h2 id="sanc-title">Las sanciones <em>no son hipotéticas</em></h2>
          <p>La Agencia Española de Protección de Datos (AEPD) ha impuesto más de 700 sanciones en los últimos tres años. No solo a grandes corporaciones: pymes, autónomos y asociaciones están en el radar.</p>
          <p>Una actuación diligente y documentada puede reducir significativamente la sanción o evitarla por completo. Lo hemos demostrado: en uno de nuestros casos, coordinamos la respuesta ante la AEPD y redujimos la sanción en un <strong style="color:var(--white)">75%</strong>.</p>
          <a href="/#contacto" class="btn-primary" style="margin-top:8px;display:inline-flex">
            Protéjase ahora
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>
        <div class="sanction-amounts" aria-label="Cuantías de sanciones RGPD">
          <div>
            <div class="amount-figure">20M€</div>
            <div class="amount-label">o 4% de la facturación global anual<br />(lo que sea mayor) — infracciones graves</div>
          </div>
          <div class="amount-divider" role="separator"></div>
          <div>
            <div class="amount-figure">10M€</div>
            <div class="amount-label">o 2% de la facturación global anual<br />— infracciones menos graves</div>
          </div>
          <div class="amount-divider" role="separator"></div>
          <div>
            <div class="amount-figure" style="color:var(--teal)">72h</div>
            <div class="amount-label">Plazo máximo para notificar<br />una brecha de seguridad a la AEPD</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ── WHY US ── -->
  <section class="section-light" aria-labelledby="why-title">
    <div class="container">
      <div class="why-grid">
        <div>
          <span class="section-label">Por qué elegirnos</span>
          <h2 id="why-title">Protección de datos <em>con respaldo jurídico real</em></h2>
          <p class="section-intro" style="margin-bottom:36px">No somos una gestoría que vende plantillas. Somos abogados con más de 30 años de experiencia que entienden la tecnología y la usan para protegerle mejor.</p>
          <div class="why-list" role="list">
            <div class="why-item" role="listitem">
              <div class="why-bullet" aria-hidden="true">01</div>
              <div class="why-item-text">
                <h3>Experiencia jurídica demostrable</h3>
                <p>Más de tres décadas ante juzgados y organismos reguladores. Sabemos cómo responde la AEPD y qué argumentos reducen sanciones.</p>
              </div>
            </div>
            <div class="why-item" role="listitem">
              <div class="why-bullet" aria-hidden="true">02</div>
              <div class="why-item-text">
                <h3>Tecnología legaltech integrada</h3>
                <p>Usamos IA para analizar contratos, identificar riesgos y acelerar la documentación. Mismo resultado, en menos tiempo, a menor coste.</p>
              </div>
            </div>
            <div class="why-item" role="listitem">
              <div class="why-bullet" aria-hidden="true">03</div>
              <div class="why-item-text">
                <h3>Especialistas locales con visión nacional</h3>
                <p>Despacho en Lorca con clientes en toda España. Conocemos el contexto empresarial de la Región de Murcia y el marco normativo europeo.</p>
              </div>
            </div>
            <div class="why-item" role="listitem">
              <div class="why-bullet" aria-hidden="true">04</div>
              <div class="why-item-text">
                <h3>Cooperativa comprometida</h3>
                <p>Cada profesional es socio del proyecto. Su implicación personal es muy superior a la de cualquier empleado de una consultoría grande.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="why-cta-box">
          <div class="big-quote" aria-hidden="true">"</div>
          <blockquote>"Coordinamos la respuesta legal ante la AEPD y minimizamos la sanción mediante una actuación rápida y documentada."</blockquote>
          <cite>— Caso real: e-commerce con brecha de datos de clientes</cite>
          <div style="background:var(--navy-border);height:1px;margin-bottom:28px"></div>
          <p style="font-size:14px;color:var(--gray);margin-bottom:20px">Resultado: <strong style="color:var(--gold)">sanción reducida en un 75%</strong> por actuación diligente.</p>
          <a href="/#contacto" class="btn-primary" style="width:100%;justify-content:center">Solicitar consulta gratuita</a>
          <p style="font-size:11.5px;color:var(--gray);text-align:center;margin-top:12px">Sin compromiso · Respuesta en &lt;24h</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ── FAQ ── -->
  <section aria-labelledby="faq-title">
    <div class="container">
      <span class="section-label">Preguntas frecuentes</span>
      <h2 id="faq-title">Lo que nuestros<br />clientes nos <em>preguntan</em></h2>
      <p class="section-intro">Resolvemos las dudas más habituales sobre el RGPD y la protección de datos.</p>
      <div class="faq-list" role="list" id="faq">

        <div class="faq-item" role="listitem">
          <button class="faq-question" aria-expanded="false" aria-controls="faq1">
            ¿Todas las empresas están obligadas a cumplir el RGPD?
            <span class="faq-icon" aria-hidden="true">+</span>
          </button>
          <div class="faq-answer" id="faq1" role="region">
            <div class="faq-answer-inner">Sí. Cualquier empresa, autónomo u organización que trate datos personales de ciudadanos de la UE debe cumplir el RGPD, independientemente de su tamaño o sector. La Ley Orgánica 3/2018 (LOPDGDD) lo complementa en España. El error habitual es creer que el RGPD solo afecta a grandes empresas: la AEPD ha sancionado autónomos, pequeñas tiendas, asociaciones y comunidades de propietarios.</div>
          </div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-question" aria-expanded="false" aria-controls="faq2">
            ¿Cuánto puede costar una sanción por incumplimiento?
            <span class="faq-icon" aria-hidden="true">+</span>
          </button>
          <div class="faq-answer" id="faq2" role="region">
            <div class="faq-answer-inner">Las sanciones graves alcanzan hasta 20 millones de euros o el 4% de la facturación global anual (lo que sea mayor). Las menos graves, hasta 10M€ o el 2%. Pero más allá del importe económico, la AEPD puede imponer apercibimientos, limitaciones o prohibiciones del tratamiento, y la obligación de comunicar la brecha a los afectados, con el daño reputacional que eso conlleva.</div>
          </div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-question" aria-expanded="false" aria-controls="faq3">
            ¿Qué es un DPD y cuándo es obligatorio tenerlo?
            <span class="faq-icon" aria-hidden="true">+</span>
          </button>
          <div class="faq-answer" id="faq3" role="region">
            <div class="faq-answer-inner">El Delegado de Protección de Datos (DPD o DPO) es la figura responsable de supervisar el cumplimiento del RGPD en la organización. Es obligatorio para autoridades y organismos públicos, empresas que realizan tratamientos a gran escala de datos sensibles y empresas que monitorizan sistemáticamente a personas a gran escala. Puede ser interno o externo; F&amp;P Legaltec ofrece el servicio de DPD externo, con toda la garantía jurídica sin el coste de una contratación fija.</div>
          </div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-question" aria-expanded="false" aria-controls="faq4">
            ¿Cuánto tiempo lleva el proceso de adecuación?
            <span class="faq-icon" aria-hidden="true">+</span>
          </button>
          <div class="faq-answer" id="faq4" role="region">
            <div class="faq-answer-inner">Para una pyme o autónomo, el proceso completo (diagnóstico, documentación, implantación y formación básica del equipo) suele resolverse en 3 a 6 semanas. Gracias al uso de herramientas legaltech, aceleramos significativamente la fase de análisis documental. Organizaciones más grandes o con tratamientos complejos pueden requerir un plazo mayor.</div>
          </div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-question" aria-expanded="false" aria-controls="faq5">
            Ya tenemos una política de privacidad en la web, ¿es suficiente?
            <span class="faq-icon" aria-hidden="true">+</span>
          </button>
          <div class="faq-answer" id="faq5" role="region">
            <div class="faq-answer-inner">En la mayoría de los casos, no. Una política de privacidad visible en la web es solo una de las obligaciones del RGPD. Las otras —registro de actividades de tratamiento, contratos con encargados externos, medidas de seguridad documentadas, gestión de derechos de los interesados, y más— son internas y no se ven en la web, pero son igualmente exigibles y sancionables. En nuestra auditoría comprobamos el estado real de todo el conjunto.</div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ── CTA BANNER ── -->
  <div class="container">
    <div class="cta-banner" role="complementary">
      <div>
        <h2>¿Su empresa está<br />realmente <em>protegida</em>?</h2>
        <p>Primera consulta siempre gratuita y sin compromiso. Le respondemos en menos de 24 horas con una valoración honesta de su situación.</p>
      </div>
      <div class="cta-actions">
        <a href="/#contacto" class="btn-primary">
          Consulta gratuita
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
        <a href="tel:+34676594016" class="btn-ghost">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 8.81 19.79 19.79 0 01.12 2.2 2 2 0 012.1 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.91 7.91a16 16 0 006.36 6.36l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
          +34 676 594 016
        </a>
        <span class="cta-note">Lunes a viernes · 9:00 – 21:00</span>
      </div>
    </div>
  </div>

  <!-- ── RELATED ── -->
  <section class="section-light" aria-labelledby="rel-title">
    <div class="container">
      <span class="section-label">También le puede interesar</span>
      <h2 id="rel-title">Otros servicios <em>legaltech</em></h2>
      <p class="section-intro">Combinamos protección de datos con el resto de necesidades jurídico-tecnológicas de su empresa.</p>
      <div class="related-grid" role="list">
        <a href="/legaltech/ciberseguridad-legal/" class="related-card" role="listitem">
          <p class="related-tag">Legaltech</p>
          <h3>Ciberseguridad legal</h3>
          <p>Asesoramiento ante incidentes de ciberseguridad, delitos informáticos y responsabilidad civil derivada de vulneraciones de datos.</p>
          <span class="related-link">Saber más <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </a>
        <a href="/legaltech/contratos-tecnologicos/" class="related-card" role="listitem">
          <p class="related-tag">Legaltech</p>
          <h3>Contratos tecnológicos</h3>
          <p>Redacción y revisión de contratos SaaS, acuerdos de desarrollo de software, SLAs, términos de uso y políticas de privacidad.</p>
          <span class="related-link">Saber más <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </a>
        <a href="/legaltech/startups-empresas-tech/" class="related-card" role="listitem">
          <p class="related-tag">Legaltech</p>
          <h3>Startups y empresas tech</h3>
          <p>Constitución, pactos de socios, propiedad intelectual y cumplimiento normativo integral para empresas tecnológicas en crecimiento.</p>
          <span class="related-link">Saber más <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </a>
      </div>
    </div>
  </section>

</main>

<script>
  document.querySelectorAll('.faq-question').forEach(btn => {
    btn.addEventListener('click', () => {
      const item   = btn.closest('.faq-item');
      const answer = btn.nextElementSibling;
      const isOpen = item.classList.contains('open');
      document.querySelectorAll('.faq-item.open').forEach(el => {
        el.classList.remove('open');
        el.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
        el.querySelector('.faq-answer').style.maxHeight = null;
      });
      if (!isOpen) {
        item.classList.add('open');
        btn.setAttribute('aria-expanded', 'true');
        answer.style.maxHeight = answer.scrollHeight + 'px';
      }
    });
  });
</script>

<?php require_once __DIR__ . '/../partials/footer.php'; ?>
