<?php
$title       = 'Servicios jurídicos en Lorca y Murcia | F&P Legaltec';
$description = 'Abogados especialistas en derecho laboral, civil, penal, mercantil, extranjería y asesoría legal en Lorca y Murcia. Más de 30 años de experiencia. Primera consulta gratuita.';
$canonical   = 'https://pflegaltec.com/servicios/';
$ogImage     = 'https://pflegaltec.com/assets/og-servicios.jpg';

$breadcrumb = [
  ['name' => 'Inicio',              'url' => '/'],
  ['name' => 'Servicios jurídicos'],
];

$jsonLd = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'ItemList',
  'name'            => 'Servicios jurídicos — F&P Legaltec',
  'description'     => 'Especialistas en derecho laboral, civil, penal, mercantil y extranjería en Lorca y Murcia.',
  'url'             => 'https://pflegaltec.com/servicios/',
  'numberOfItems'   => 6,
  'itemListElement' => [
    ['@type' => 'ListItem', 'position' => 1, 'name' => 'Derecho laboral',        'url' => 'https://pflegaltec.com/servicios/derecho-laboral/'],
    ['@type' => 'ListItem', 'position' => 2, 'name' => 'Extranjería en Lorca',   'url' => 'https://pflegaltec.com/servicios/extranjeria-lorca/'],
    ['@type' => 'ListItem', 'position' => 3, 'name' => 'Derecho civil',          'url' => 'https://pflegaltec.com/servicios/derecho-civil/'],
    ['@type' => 'ListItem', 'position' => 4, 'name' => 'Derecho penal',          'url' => 'https://pflegaltec.com/servicios/derecho-penal/'],
    ['@type' => 'ListItem', 'position' => 5, 'name' => 'Derecho mercantil',      'url' => 'https://pflegaltec.com/servicios/derecho-mercantil/'],
    ['@type' => 'ListItem', 'position' => 6, 'name' => 'Asesoría legal general', 'url' => 'https://pflegaltec.com/servicios/asesoria-legal-general/'],
  ],
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$extraHead = <<<'HTML'
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,600&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Inicio","item":"https://pflegaltec.com/"},{"@type":"ListItem","position":2,"name":"Servicios jurídicos","item":"https://pflegaltec.com/servicios/"}]}
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
  .hero::before { content: ''; position: absolute; inset: 0; background: radial-gradient(ellipse 60% 50% at 70% 50%, rgba(62,207,178,.07) 0%, transparent 70%), radial-gradient(ellipse 40% 60% at 10% 80%, rgba(200,169,110,.06) 0%, transparent 60%); pointer-events: none; }
  .hero::after { content: 'LEX'; position: absolute; right: -20px; top: 50%; transform: translateY(-50%); font-family: var(--serif); font-size: clamp(120px,16vw,220px); font-weight: 700; color: rgba(200,169,110,.04); pointer-events: none; white-space: nowrap; line-height: 1; }
  .hero-inner { position: relative; max-width: var(--max); margin: 0 auto; padding: 0 24px; }
  .hero-badge { display: inline-flex; align-items: center; gap: 8px; background: var(--gold-dim); border: 1px solid rgba(200,169,110,.25); color: var(--gold); font-size: 11.5px; font-weight: 600; letter-spacing: .08em; text-transform: uppercase; padding: 6px 14px; border-radius: 40px; margin-bottom: 24px; }
  h1 { font-family: var(--serif); font-size: clamp(38px,5.5vw,62px); font-weight: 700; color: var(--white); line-height: 1.1; letter-spacing: -.02em; margin-bottom: 20px; }
  h1 em { font-style: italic; color: var(--gold); }
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
  section.section-light .service-icon { background: rgba(201,139,98,.12); color: var(--copper); }
  section.section-light .service-link { color: var(--copper); }

  .section-label { display: inline-block; font-size: 11px; font-weight: 600; letter-spacing: .12em; text-transform: uppercase; color: var(--teal); margin-bottom: 14px; }
  h2 { font-family: var(--serif); font-size: clamp(28px,4vw,44px); font-weight: 700; color: var(--white); line-height: 1.15; letter-spacing: -.02em; margin-bottom: 16px; }
  h2 em { font-style: italic; color: var(--gold); }
  .section-intro { font-size: 16px; color: var(--gray); max-width: 600px; line-height: 1.7; margin-bottom: 52px; }

  .services-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 20px; }
  .service-card { background: var(--navy-mid); border: 1px solid var(--navy-border); border-radius: 10px; padding: 32px; transition: border-color var(--transition), transform var(--transition); position: relative; overflow: hidden; text-decoration: none; display: block; }
  .service-card::before { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 2px; background: linear-gradient(90deg, var(--gold), transparent); opacity: 0; transition: opacity var(--transition); }
  .service-card:hover { border-color: rgba(200,169,110,.4); transform: translateY(-3px); }
  .service-card:hover::before { opacity: 1; }
  .service-card-badge { display: inline-flex; align-items: center; gap: 6px; font-size: 10.5px; font-weight: 600; letter-spacing: .08em; text-transform: uppercase; color: var(--teal); background: var(--teal-dim); border: 1px solid rgba(62,207,178,.2); padding: 3px 10px; border-radius: 20px; margin-bottom: 16px; }
  .service-icon { width: 46px; height: 46px; background: var(--gold-dim); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 18px; color: var(--gold); }
  .service-card h3 { font-family: var(--serif); font-size: 22px; font-weight: 600; color: var(--white); margin-bottom: 10px; }
  .service-card p { font-size: 14px; color: var(--gray); line-height: 1.65; margin-bottom: 18px; }
  .service-link { display: inline-flex; align-items: center; gap: 5px; font-size: 13.5px; color: var(--gold); font-weight: 500; transition: gap var(--transition); }
  .service-card:hover .service-link { gap: 8px; }

  .cta-banner { background: var(--navy-mid); border: 1px solid var(--navy-border); border-radius: 12px; padding: 60px 56px; display: grid; grid-template-columns: 1fr auto; gap: 40px; align-items: center; position: relative; overflow: hidden; margin: 80px 0; }
  .cta-banner::before { content: ''; position: absolute; inset: 0; background: radial-gradient(ellipse 60% 80% at 100% 50%, var(--gold-dim) 0%, transparent 70%); pointer-events: none; }
  .cta-banner h2 { font-size: clamp(24px,3.5vw,38px); margin-bottom: 12px; }
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
        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M3 6h18M3 12h18M3 18h18"/></svg>
        Servicios jurídicos
      </div>
      <h1>Asesoría jurídica integral<br />en <em>Lorca y Murcia</em></h1>
      <p class="hero-desc">Más de tres décadas resolviendo los problemas legales de particulares y empresas de la Región de Murcia. Seleccione el área jurídica que necesita.</p>
    </div>
  </header>

  <section id="servicios" class="section-light" aria-labelledby="srv-title">
    <div class="container">
      <span class="section-label">Áreas de práctica</span>
      <h2 id="srv-title">Derecho al servicio<br />de <em>sus intereses</em></h2>
      <p class="section-intro">Cubrimos todas las necesidades jurídicas de particulares y empresas, con especialización real en cada área y seguimiento personalizado.</p>
      <div class="services-grid" role="list">

        <a href="/servicios/derecho-laboral/" class="service-card" role="listitem">
          <span class="service-card-badge">Alta demanda</span>
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/></svg>
          </div>
          <h3>Derecho laboral</h3>
          <p>Defensa ante despidos, EREs, acoso laboral, reclamaciones salariales y negociación colectiva. Especialistas en conflictos laborales en Lorca y Murcia.</p>
          <span class="service-link">Ver servicio <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </a>

        <a href="/servicios/extranjeria-lorca/" class="service-card" role="listitem">
          <span class="service-card-badge">Alta demanda</span>
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>
          </div>
          <h3>Extranjería en Lorca</h3>
          <p>NIE, TIE, autorizaciones de residencia y trabajo, reagrupación familiar y nacionalidad española. Gestión eficiente en la zona de mayor demanda de Murcia.</p>
          <span class="service-link">Ver servicio <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </a>

        <a href="/servicios/derecho-civil/" class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
          </div>
          <h3>Derecho civil</h3>
          <p>Contratos, herencias y sucesiones, divorcios y separaciones, reclamaciones patrimoniales y responsabilidad civil. Protegemos su patrimonio y sus derechos.</p>
          <span class="service-link">Ver servicio <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </a>

        <a href="/servicios/derecho-penal/" class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>Derecho penal</h3>
          <p>Defensa ante acusaciones penales, recursos y apelaciones, delitos económicos y de empresa, y asistencia a víctimas en procesos penales.</p>
          <span class="service-link">Ver servicio <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </a>

        <a href="/servicios/derecho-mercantil/" class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
          </div>
          <h3>Derecho mercantil</h3>
          <p>Constitución y liquidación de empresas, contratos mercantiles, reclamaciones comerciales y procedimientos concursales. Seguridad jurídica para su negocio.</p>
          <span class="service-link">Ver servicio <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </a>

        <a href="/servicios/asesoria-legal-general/" class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 015.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
          </div>
          <h3>Asesoría legal general</h3>
          <p>Consultas jurídicas generales, orientación legal integral y acompañamiento en decisiones con implicaciones legales. El despacho jurídico de confianza en Lorca.</p>
          <span class="service-link">Ver servicio <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </a>

      </div>
    </div>
  </section>

  <?php
  $ctaTitle = '¿No sabe qué área jurídica necesita?';
  $ctaDesc  = 'Cuéntenos su situación en la consulta gratuita y le orientamos. Sin compromiso ni tecnicismos.';
  require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/cta-banner.php';
  ?>

</main>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
