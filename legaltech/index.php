<?php
$title       = 'Legaltech en Lorca y Murcia — Derecho y Tecnología | F&P Legaltec';
$description = 'Protección de datos RGPD, IA aplicada al derecho, ciberseguridad legal y contratos tecnológicos en Lorca y Murcia. F&P Legaltec combina 30 años de experiencia jurídica con las últimas herramientas legaltech.';
$canonical   = 'https://pflegaltec.com/legaltech/';
$ogImage     = 'https://pflegaltec.com/assets/og-legaltech.jpg';

$breadcrumb = [
  ['name' => 'Inicio',    'url' => '/'],
  ['name' => 'Legaltech'],
];

$jsonLd = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'ItemList',
  'name'            => 'Servicios Legaltech — F&P Legaltec',
  'description'     => 'Protección de datos, IA jurídica, ciberseguridad legal y contratos tecnológicos en Lorca y Murcia.',
  'url'             => 'https://pflegaltec.com/legaltech/',
  'numberOfItems'   => 5,
  'itemListElement' => [
    ['@type' => 'ListItem', 'position' => 1, 'name' => 'Protección de datos y RGPD', 'url' => 'https://pflegaltec.com/legaltech/proteccion-datos-rgpd/'],
    ['@type' => 'ListItem', 'position' => 2, 'name' => 'IA aplicada al derecho',      'url' => 'https://pflegaltec.com/legaltech/ia-aplicada-al-derecho/'],
    ['@type' => 'ListItem', 'position' => 3, 'name' => 'Ciberseguridad legal',        'url' => 'https://pflegaltec.com/legaltech/ciberseguridad-legal/'],
    ['@type' => 'ListItem', 'position' => 4, 'name' => 'Contratos tecnológicos',      'url' => 'https://pflegaltec.com/legaltech/contratos-tecnologicos/'],
    ['@type' => 'ListItem', 'position' => 5, 'name' => 'Startups y empresas tech',    'url' => 'https://pflegaltec.com/legaltech/startups-empresas-tech/'],
  ],
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$extraHead = <<<'HTML'
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,600&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Inicio","item":"https://pflegaltec.com/"},{"@type":"ListItem","position":2,"name":"Legaltech","item":"https://pflegaltec.com/legaltech/"}]}
</script>
<style>
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
    --copper:      #c98b62;
    --serif:       'Cormorant Garamond', Georgia, serif;
    --sans:        'DM Sans', system-ui, sans-serif;
    --radius:      6px;
    --max:         1160px;
    --transition:  .25s cubic-bezier(.4,0,.2,1);
  }
  body { background: var(--navy); color: var(--text); font-family: var(--sans); font-size: 16px; line-height: 1.7; -webkit-font-smoothing: antialiased; }
  main { padding-top: 110px; }
  .container { max-width: var(--max); margin: 0 auto; padding: 0 24px; }
  .sr-only { position: absolute; width: 1px; height: 1px; overflow: hidden; clip: rect(0,0,0,0); }

  .nav { background: rgba(13,17,23,.92); border-bottom-color: var(--navy-border); }
  .nav::after { display: none; }
  .nav-link { color: var(--gray); }
  .nav-link:hover { color: var(--white); }

  .breadcrumb { padding: 14px 0; border-bottom: 1px solid var(--navy-border); }
  .breadcrumb ol { display: flex; align-items: center; gap: 8px; list-style: none; font-size: 13px; color: var(--gray); }
  .breadcrumb a { color: var(--gray); text-decoration: none; transition: color var(--transition); }
  .breadcrumb a:hover { color: var(--gold); }
  .breadcrumb li:not(:last-child)::after { content: '›'; margin-left: 8px; }
  .breadcrumb li:last-child { color: var(--gold); }

  .hero { position: relative; overflow: hidden; padding: 88px 0 80px; border-bottom: 1px solid var(--navy-border); background: var(--navy); }
  .hero::before { content: ''; position: absolute; inset: 0; background: radial-gradient(ellipse 60% 50% at 70% 50%, rgba(62,207,178,.09) 0%, transparent 70%), radial-gradient(ellipse 40% 60% at 10% 80%, rgba(200,169,110,.06) 0%, transparent 60%); pointer-events: none; }
  .hero::after { content: 'TECH'; position: absolute; right: -20px; top: 50%; transform: translateY(-50%); font-family: var(--serif); font-size: clamp(120px,16vw,220px); font-weight: 700; color: rgba(62,207,178,.04); pointer-events: none; white-space: nowrap; line-height: 1; }
  .hero-inner { position: relative; max-width: var(--max); margin: 0 auto; padding: 0 24px; }
  .hero-badge { display: inline-flex; align-items: center; gap: 8px; background: var(--teal-dim); border: 1px solid rgba(62,207,178,.25); color: var(--teal); font-size: 11.5px; font-weight: 600; letter-spacing: .08em; text-transform: uppercase; padding: 6px 14px; border-radius: 40px; margin-bottom: 24px; }
  h1 { font-family: var(--serif); font-size: clamp(38px,5.5vw,62px); font-weight: 700; color: var(--white); line-height: 1.1; letter-spacing: -.02em; margin-bottom: 20px; }
  h1 em { font-style: italic; color: var(--teal); }
  .hero-desc { font-size: 17px; color: var(--text); max-width: 620px; line-height: 1.7; margin-bottom: 36px; }

  section { padding: 80px 0; background: var(--navy); }
  section + section { border-top: 1px solid var(--navy-border); }
  section.section-light { background: #f5f2ed; border-top-color: rgba(26,32,48,.10); }
  section.section-light h2 { color: #1a2030; }
  section.section-light h2 em { color: var(--copper); }
  section.section-light .section-label { color: var(--copper); }
  section.section-light .section-intro { color: rgba(26,32,48,.60); }
  section.section-light .service-card { background: #fff; border-color: rgba(26,32,48,.10); }
  section.section-light .service-card:hover { border-color: var(--copper); }
  section.section-light .service-card::before { background: linear-gradient(90deg, var(--copper), transparent); }
  section.section-light .service-card h3 { color: #1a2030; }
  section.section-light .service-card p { color: rgba(26,32,48,.60); }
  section.section-light .service-icon { background: rgba(62,207,178,.10); color: #2bb89e; }
  section.section-light .service-link { color: var(--copper); }

  .section-label { display: inline-block; font-size: 11px; font-weight: 600; letter-spacing: .12em; text-transform: uppercase; color: var(--teal); margin-bottom: 14px; }
  h2 { font-family: var(--serif); font-size: clamp(28px,4vw,44px); font-weight: 700; color: var(--white); line-height: 1.15; letter-spacing: -.02em; margin-bottom: 16px; }
  h2 em { font-style: italic; color: var(--teal); }
  .section-intro { font-size: 16px; color: var(--gray); max-width: 600px; line-height: 1.7; margin-bottom: 52px; }

  .services-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 20px; }
  .service-card { background: var(--navy-mid); border: 1px solid var(--navy-border); border-radius: 10px; padding: 32px; transition: border-color var(--transition), transform var(--transition); position: relative; overflow: hidden; text-decoration: none; display: block; }
  .service-card::before { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 2px; background: linear-gradient(90deg, var(--teal), transparent); opacity: 0; transition: opacity var(--transition); }
  .service-card:hover { border-color: rgba(62,207,178,.35); transform: translateY(-3px); }
  .service-card:hover::before { opacity: 1; }
  .service-card-badge { display: inline-flex; align-items: center; gap: 6px; font-size: 10.5px; font-weight: 600; letter-spacing: .08em; text-transform: uppercase; color: var(--teal); background: var(--teal-dim); border: 1px solid rgba(62,207,178,.2); padding: 3px 10px; border-radius: 20px; margin-bottom: 16px; }
  .service-icon { width: 46px; height: 46px; background: var(--teal-dim); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 18px; color: var(--teal); }
  .service-card h3 { font-family: var(--serif); font-size: 22px; font-weight: 600; color: var(--white); margin-bottom: 10px; }
  .service-card p { font-size: 14px; color: var(--gray); line-height: 1.65; margin-bottom: 18px; }
  .service-link { display: inline-flex; align-items: center; gap: 5px; font-size: 13.5px; color: var(--teal); font-weight: 500; transition: gap var(--transition); }
  .service-card:hover .service-link { gap: 8px; }

  .cta-banner { background: var(--navy-mid); border: 1px solid var(--navy-border); border-radius: 12px; padding: 60px 56px; display: grid; grid-template-columns: 1fr auto; gap: 40px; align-items: center; position: relative; overflow: hidden; margin: 80px 0; }
  .cta-banner::before { content: ''; position: absolute; inset: 0; background: radial-gradient(ellipse 60% 80% at 100% 50%, var(--teal-dim) 0%, transparent 70%); pointer-events: none; }
  .cta-banner h2 { font-size: clamp(24px,3.5vw,38px); margin-bottom: 12px; color: var(--white); }
  .cta-banner h2 em { color: var(--teal); }
  .cta-banner p { font-size: 15px; color: var(--gray); }
  .cta-actions { display: flex; flex-direction: column; gap: 12px; align-items: center; flex-shrink: 0; }
  .cta-note { font-size: 11.5px; color: var(--gray); text-align: center; }

  .btn-primary { display: inline-flex; align-items: center; gap: 8px; background: var(--gold); color: var(--navy); text-decoration: none; font-weight: 600; font-size: 14.5px; padding: 14px 28px; border-radius: var(--radius); transition: background var(--transition), transform var(--transition); }
  .btn-primary:hover { background: var(--gold-light); transform: translateY(-1px); }
  .btn-ghost { display: inline-flex; align-items: center; gap: 8px; color: var(--text); text-decoration: none; font-weight: 500; font-size: 14.5px; padding: 14px 24px; border: 1px solid var(--navy-border); border-radius: var(--radius); transition: border-color var(--transition), color var(--transition); }
  .btn-ghost:hover { border-color: var(--gold); color: var(--gold); }

  .footer { background: var(--navy-mid); border-top: 1px solid var(--navy-border); }
  .footer-logo { color: var(--gold); }
  .footer-col h4 { color: var(--gold); }

  @media (max-width: 900px) {
    .cta-banner { grid-template-columns: 1fr; }
    .services-grid { grid-template-columns: 1fr 1fr; }
  }
  @media (max-width: 600px) {
    section { padding: 56px 0; }
    .hero { padding: 56px 0 48px; }
    .cta-banner { padding: 40px 28px; }
    h1 { font-size: 36px; }
    .services-grid { grid-template-columns: 1fr; }
  }
</style>
HTML;

require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/nav.php';
?>

<main>

  <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/breadcrumb.php'; ?>

  <header class="hero">
    <div class="hero-inner">
      <div class="hero-badge">
        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
        Legaltech · Derecho y Tecnología
      </div>
      <h1>Derecho potenciado<br />por <em>tecnología real</em></h1>
      <p class="hero-desc">Combinamos más de treinta años de experiencia jurídica con las herramientas legaltech más avanzadas: inteligencia artificial, automatización documental y cumplimiento normativo digital.</p>
    </div>
  </header>

  <section id="servicios-legaltech" class="section-light" aria-labelledby="srv-title">
    <div class="container">
      <span class="section-label">Servicios tecnológicos</span>
      <h2 id="srv-title">Soluciones jurídicas<br />para el <em>mundo digital</em></h2>
      <p class="section-intro">Desde la protección de datos hasta la defensa ante incidentes de ciberseguridad. Derecho que entiende la tecnología.</p>
      <div class="services-grid" role="list">

        <a href="/legaltech/proteccion-datos-rgpd/" class="service-card" role="listitem">
          <span class="service-card-badge">Disponible</span>
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>Protección de datos y RGPD</h3>
          <p>Auditorías de cumplimiento, registro de actividades, DPD externo y gestión de brechas de seguridad. Cumplimiento real, no plantillas genéricas.</p>
          <span class="service-link">Ver servicio <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </a>

        <a href="/legaltech/ia-aplicada-al-derecho/" class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/><path d="M7 8h10M7 12h6"/></svg>
          </div>
          <h3>IA aplicada al derecho</h3>
          <p>Análisis de contratos con inteligencia artificial, research jurídico automatizado y revisión documental acelerada para reducir costes y tiempos.</p>
          <span class="service-link">Ver servicio <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </a>

        <a href="/legaltech/ciberseguridad-legal/" class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
          </div>
          <h3>Ciberseguridad legal</h3>
          <p>Asesoramiento jurídico ante incidentes de ciberseguridad, delitos informáticos y responsabilidad civil derivada de vulneraciones de sistemas.</p>
          <span class="service-link">Ver servicio <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </a>

        <a href="/legaltech/contratos-tecnologicos/" class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
          </div>
          <h3>Contratos tecnológicos</h3>
          <p>Redacción y revisión de contratos SaaS, acuerdos de desarrollo de software, SLAs, términos de uso y políticas de privacidad con validez real.</p>
          <span class="service-link">Ver servicio <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </a>

        <a href="/legaltech/startups-empresas-tech/" class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          </div>
          <h3>Startups y empresas tech</h3>
          <p>Constitución, pactos de socios, propiedad intelectual e industrial, stock options y cumplimiento normativo integral para empresas tecnológicas en crecimiento.</p>
          <span class="service-link">Ver servicio <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </a>

      </div>
    </div>
  </section>

  <?php
  $ctaTitle = '¿Su empresa opera en el entorno digital?';
  $ctaDesc  = 'Le asesoramos en todos los aspectos jurídicos de la tecnología. Primera consulta gratuita y sin compromiso.';
  require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/cta-banner.php';
  ?>

</main>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
