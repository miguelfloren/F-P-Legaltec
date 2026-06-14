<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/lib/schemas/legal-service.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lib/schemas/breadcrumb.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lib/schemas/faq.php';

$title       = 'Abogado de extranjería en Lorca y Murcia — NIE, TIE, residencia y nacionalidad | F&P Legaltec';
$description = 'Especialistas en extranjería en Lorca y Murcia. NIE, TIE, autorizaciones de residencia y trabajo, arraigo, reagrupación familiar y nacionalidad española. Primera consulta gratuita.';
$canonical   = 'https://pflegaltec.com/servicios/extranjeria-lorca/';
$ogImage     = 'https://pflegaltec.com/assets/og-servicios.jpg';

$breadcrumb = [
  ['name' => 'Inicio',              'url' => '/'],
  ['name' => 'Servicios jurídicos', 'url' => '/servicios/'],
  ['name' => 'Extranjería en Lorca'],
];

// Single source of truth for the FAQ: used for both the visible accordion
// and the FAQPage structured data, so they can never drift apart.
$faqs = [
  '¿Qué diferencia hay entre el NIE y la TIE?' =>
    'El NIE (Número de Identidad de Extranjero) es un número personal, único y permanente que identifica al extranjero ante la Administración española; no caduca. La TIE (Tarjeta de Identidad de Extranjero) es el documento físico que acredita que usted tiene una autorización de residencia en vigor e incluye su NIE; sí tiene fecha de caducidad y debe renovarse cuando vence la autorización que la respalda.',
  '¿Qué requisitos necesito para el arraigo social?' =>
    'El arraigo social exige acreditar una permanencia continuada en España de al menos tres años, carecer de antecedentes penales en España y en el país de origen, y disponer de un contrato de trabajo o medios económicos suficientes. Además se valora tener vínculos familiares con residentes legales o, en su defecto, un informe de integración social emitido por la comunidad autónoma. Cada caso es distinto: conviene revisar la documentación antes de presentar.',
  '¿Cuánto tarda en concederse la nacionalidad española?' =>
    'El plazo legal de resolución es de un año desde que el expediente está completo, aunque en la práctica los tiempos varían. El requisito general de residencia es de diez años de residencia legal y continuada, que se reduce a dos años para nacionales de países iberoamericanos, Andorra, Filipinas, Guinea Ecuatorial, Portugal o sefardíes, y a un año en supuestos como matrimonio con español o nacimiento en España. Hay que superar además las pruebas CCSE y, en su caso, DELE.',
  '¿Puedo trabajar mientras tramito mi autorización de residencia?' =>
    'Depende del tipo de autorización. Algunas modalidades, como el arraigo social o laboral, llevan aparejada autorización para trabajar desde su concesión. Otras, como la residencia no lucrativa, no permiten trabajar. Durante la tramitación de una primera autorización normalmente no se puede trabajar hasta obtener la resolución favorable y, en su caso, el alta en la Seguridad Social. Le asesoramos sobre qué vía se ajusta a su situación.',
  '¿Qué necesito para reagrupar a mi familia?' =>
    'Para la reagrupación familiar debe acreditar residencia legal en España (generalmente haber renovado al menos una vez), una vivienda adecuada mediante informe de la comunidad autónoma o ayuntamiento, y medios económicos suficientes para mantener a los familiares reagrupados. Pueden reagruparse cónyuge o pareja registrada, hijos menores o con discapacidad, y ascendientes a cargo en determinados supuestos. Preparamos el expediente completo y el seguimiento hasta la resolución.',
];

$jsonLd = [
  pfl_legal_service_schema(
    'Extranjería en Lorca — F&P Legaltec',
    'Abogados especialistas en NIE, TIE, autorizaciones de residencia y trabajo, arraigo, reagrupación familiar y nacionalidad española en Lorca y Murcia.',
    $canonical
  ),
  pfl_breadcrumb_schema($breadcrumb, $canonical),
  pfl_faq_schema($faqs),
];

$extraHead = <<<'HTML'
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,600&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/css/inner.css">
HTML;

require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/nav.php';
?>

<main>

  <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/breadcrumb.php'; ?>

  <!-- HERO -->
  <header class="hero">
    <div class="hero-inner">
      <div class="hero-content">
        <div class="hero-badge">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>
          Servicios jurídicos · Extranjería
        </div>
        <h1>Abogados de extranjería<br />en <em>Lorca y Murcia</em></h1>
        <p class="hero-desc">
          Tramitamos NIE, TIE, autorizaciones de residencia y trabajo, arraigo, reagrupación familiar y nacionalidad española. Conocemos los plazos y la realidad de los expedientes de extranjería en la Región de Murcia.
        </p>
        <div class="hero-actions">
          <a href="/contacto/" class="btn-primary">
            Consulta gratuita
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="#servicios-extranjeria" class="btn-ghost">Ver todos los trámites</a>
        </div>
      </div>
      <div class="hero-stats" aria-label="Datos destacados">
        <div class="stat-card">
          <div class="stat-num">+30</div>
          <div class="stat-label">Años de experiencia</div>
        </div>
        <div class="stat-card">
          <div class="stat-num">3</div>
          <div class="stat-label">Años para el arraigo social</div>
        </div>
        <div class="stat-card">
          <div class="stat-num">10</div>
          <div class="stat-label">Años para nacionalidad</div>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="intro-alert" role="note">
      <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
      <p>
        <strong>En extranjería, un solo documento mal presentado puede retrasar meses su expediente.</strong> Preparamos cada solicitud revisando los requisitos actualizados y los plazos de la Oficina de Extranjería de Murcia. Le acompañamos desde la primera consulta hasta la resolución.
      </p>
    </div>
  </div>

  <!-- SERVICIOS -->
  <section id="servicios-extranjeria" class="section-light" aria-labelledby="srv-title">
    <div class="container">
      <span class="section-label">Qué tramitamos</span>
      <h2 id="srv-title">Todos los trámites de <em>extranjería</em></h2>
      <p class="section-intro">Cubrimos el ciclo completo de la situación administrativa del extranjero, desde la primera autorización hasta la nacionalidad española.</p>
      <div class="services-grid" role="list">

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="4" width="18" height="16" rx="2"/><circle cx="9" cy="10" r="2"/><path d="M15 8h3M15 12h3M5 16h14"/></svg>
          </div>
          <h3>NIE y TIE</h3>
          <p>Obtención del Número de Identidad de Extranjero y de la Tarjeta de Identidad de Extranjero, incluyendo cita previa, tasas y huellas.</p>
          <ul>
            <li>Asignación de NIE</li>
            <li>Expedición y renovación de TIE</li>
            <li>Gestión de cita previa y tasas</li>
            <li>Duplicados por pérdida o robo</li>
          </ul>
        </article>

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
          </div>
          <h3>Residencia y trabajo</h3>
          <p>Autorizaciones de residencia y trabajo por cuenta ajena y propia, residencia no lucrativa y modificaciones de la situación administrativa.</p>
          <ul>
            <li>Residencia y trabajo por cuenta ajena</li>
            <li>Autorización por cuenta propia</li>
            <li>Residencia no lucrativa</li>
            <li>Modificación y prórroga</li>
          </ul>
        </article>

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 2l3 7h7l-5.5 4 2 7L12 17l-6.5 3 2-7L2 9h7z"/></svg>
          </div>
          <h3>Arraigo</h3>
          <p>Arraigo social, laboral y familiar para regularizar la situación de quienes ya residen en España. Estudio de viabilidad antes de presentar.</p>
          <ul>
            <li>Arraigo social</li>
            <li>Arraigo laboral</li>
            <li>Arraigo familiar</li>
            <li>Informe de integración social</li>
          </ul>
        </article>

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
          </div>
          <h3>Reagrupación familiar</h3>
          <p>Reagrupación de cónyuge o pareja, hijos y ascendientes a cargo. Preparamos el informe de vivienda y la acreditación de medios económicos.</p>
          <ul>
            <li>Cónyuge y pareja registrada</li>
            <li>Hijos menores o con discapacidad</li>
            <li>Ascendientes a cargo</li>
            <li>Informe de vivienda adecuada</li>
          </ul>
        </article>

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11"/></svg>
          </div>
          <h3>Nacionalidad española</h3>
          <p>Tramitación de la nacionalidad por residencia y por otras vías, preparación de las pruebas CCSE y DELE y seguimiento del expediente.</p>
          <ul>
            <li>Nacionalidad por residencia</li>
            <li>Preparación de pruebas CCSE y DELE</li>
            <li>Jura o promesa ante el Registro Civil</li>
            <li>Recursos por denegación o silencio</li>
          </ul>
        </article>

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 12a9 9 0 019-9 9.75 9.75 0 016.74 2.74L21 8"/><path d="M21 3v5h-5"/><path d="M21 12a9 9 0 01-9 9 9.75 9.75 0 01-6.74-2.74L3 16"/><path d="M3 21v-5h5"/></svg>
          </div>
          <h3>Renovaciones y recursos</h3>
          <p>Renovación de autorizaciones en vigor y defensa frente a denegaciones, archivos o expedientes de expulsión ante la Administración y los tribunales.</p>
          <ul>
            <li>Renovación de residencia y trabajo</li>
            <li>Recursos de reposición y alzada</li>
            <li>Recurso contencioso-administrativo</li>
            <li>Defensa en expedientes de expulsión</li>
          </ul>
        </article>

      </div>
    </div>
  </section>

  <!-- PROCESO -->
  <section aria-labelledby="proc-title">
    <div class="container">
      <span class="section-label">Cómo trabajamos</span>
      <h2 id="proc-title">De la consulta<br />a la <em>resolución</em></h2>
      <p class="section-intro">Un proceso ordenado que minimiza errores y requerimientos. Le explicamos cada paso y los plazos reales.</p>
      <div class="process-grid" role="list">
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">01</div>
          <h3>Consulta gratuita</h3>
          <p>Analizamos su situación administrativa y le indicamos qué vía es viable y qué documentación necesitará.</p>
        </div>
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">02</div>
          <h3>Estudio de viabilidad</h3>
          <p>Revisamos requisitos, plazos de permanencia, antecedentes y vínculos antes de presentar nada. Evitamos solicitudes condenadas al rechazo.</p>
        </div>
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">03</div>
          <h3>Preparación del expediente</h3>
          <p>Reunimos y revisamos cada documento, traducciones juradas y legalizaciones. Un expediente completo se resuelve antes.</p>
        </div>
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">04</div>
          <h3>Presentación y tasas</h3>
          <p>Gestionamos la cita previa, el pago de tasas y la presentación telemática o presencial ante la Oficina de Extranjería.</p>
        </div>
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">05</div>
          <h3>Seguimiento</h3>
          <p>Controlamos el estado del expediente y respondemos cualquier requerimiento dentro de plazo para no perder la solicitud.</p>
        </div>
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">06</div>
          <h3>Resolución y recursos</h3>
          <p>Tramitamos la TIE tras la concesión. Si hay denegación, valoramos con usted el recurso más adecuado.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- POR QUÉ ELEGIRNOS -->
  <section class="section-light" aria-labelledby="why-title">
    <div class="container">
      <div class="why-grid">
        <div>
          <span class="section-label">Por qué elegirnos</span>
          <h2 id="why-title">Extranjería con <em>conocimiento local</em></h2>
          <p class="section-intro" style="margin-bottom:36px">Lorca y su comarca concentran una de las mayores poblaciones extranjeras de la Región de Murcia. Conocemos esa realidad y la Oficina de Extranjería que la atiende.</p>
          <div class="why-list" role="list">
            <div class="why-item" role="listitem">
              <div class="why-bullet" aria-hidden="true">01</div>
              <div class="why-item-text">
                <h3>Cercanía y trato directo</h3>
                <p>Atención presencial en Lorca, explicando cada trámite sin tecnicismos. Le acompañamos durante todo el procedimiento.</p>
              </div>
            </div>
            <div class="why-item" role="listitem">
              <div class="why-bullet" aria-hidden="true">02</div>
              <div class="why-item-text">
                <h3>Plazos bajo control</h3>
                <p>Los expedientes de extranjería tienen plazos estrictos. Vigilamos requerimientos y vencimientos para que nunca pierda una autorización.</p>
              </div>
            </div>
            <div class="why-item" role="listitem">
              <div class="why-bullet" aria-hidden="true">03</div>
              <div class="why-item-text">
                <h3>Honorarios transparentes</h3>
                <p>Le informamos del coste y de las tasas antes de empezar. Sin sorpresas ni costes ocultos.</p>
              </div>
            </div>
            <div class="why-item" role="listitem">
              <div class="why-bullet" aria-hidden="true">04</div>
              <div class="why-item-text">
                <h3>Visión jurídica completa</h3>
                <p>Coordinamos el caso con derecho laboral o civil cuando la situación lo requiere: contrato de trabajo, matrimonio, herencias o vivienda.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="why-cta-box">
          <div class="big-quote" aria-hidden="true">"</div>
          <blockquote>"Regularizamos a un trabajador del sector agrícola mediante arraigo social tras revisar su documentación y conseguir el contrato adecuado."</blockquote>
          <cite>— Caso real: trabajador agrícola, comarca de Lorca</cite>
          <div style="background:var(--navy-border);height:1px;margin-bottom:28px"></div>
          <p style="font-size:14px;color:var(--gray);margin-bottom:20px">Resultado: <strong style="color:var(--gold)">autorización concedida</strong> y posterior tramitación de la TIE.</p>
          <a href="/contacto/" class="btn-primary" style="width:100%;justify-content:center">Consulta gratuita</a>
          <p style="font-size:11.5px;color:var(--gray);text-align:center;margin-top:12px">Sin compromiso · Respuesta en &lt;24h</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section aria-labelledby="faq-title">
    <div class="container">
      <span class="section-label">Preguntas frecuentes</span>
      <h2 id="faq-title">Lo que nuestros<br />clientes nos <em>preguntan</em></h2>
      <p class="section-intro">Las dudas más habituales sobre NIE, TIE, arraigo, reagrupación y nacionalidad.</p>
      <div class="faq-list" role="list" id="faq">
        <?php $faqIndex = 0; foreach ($faqs as $question => $answer): $faqIndex++; ?>
        <div class="faq-item" role="listitem">
          <button class="faq-question" aria-expanded="false" aria-controls="faq<?= $faqIndex ?>">
            <?= htmlspecialchars($question) ?>
            <span class="faq-icon" aria-hidden="true">+</span>
          </button>
          <div class="faq-answer" id="faq<?= $faqIndex ?>" role="region">
            <div class="faq-answer-inner"><?= htmlspecialchars($answer) ?></div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- CTA BANNER -->
  <?php
  $ctaTitle = '¿Necesita regularizar<br />su <em>situación en España</em>?';
  $ctaDesc  = 'Primera consulta gratuita y sin compromiso. Analizamos su caso, le decimos qué vía es viable y los plazos reales. Respondemos en menos de 24 horas.';
  require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/cta-banner.php';
  ?>

  <!-- RELACIONADOS -->
  <section class="section-light" aria-labelledby="rel-title">
    <div class="container">
      <span class="section-label">También le puede interesar</span>
      <h2 id="rel-title">Otros servicios <em>jurídicos</em></h2>
      <p class="section-intro">Cubrimos todas las necesidades legales de particulares y empresas en Lorca y Murcia.</p>
      <div class="related-grid" role="list">
        <a href="/servicios/derecho-laboral/" class="related-card" role="listitem">
          <p class="related-tag">Servicios jurídicos</p>
          <h3>Derecho laboral</h3>
          <p>Despidos, EREs, reclamaciones salariales y contratos. Esencial cuando su autorización depende de un trabajo.</p>
          <span class="related-link">Saber más <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </a>
        <a href="/servicios/derecho-civil/" class="related-card" role="listitem">
          <p class="related-tag">Servicios jurídicos</p>
          <h3>Derecho civil</h3>
          <p>Matrimonios, parejas de hecho, herencias y vivienda. Trámites civiles que a menudo acompañan a los de extranjería.</p>
          <span class="related-link">Saber más <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </a>
        <a href="/servicios/asesoria-legal-general/" class="related-card" role="listitem">
          <p class="related-tag">Servicios jurídicos</p>
          <h3>Asesoría legal general</h3>
          <p>Orientación jurídica integral cuando no sabe por dónde empezar. El despacho de confianza en Lorca.</p>
          <span class="related-link">Saber más <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </a>
      </div>
    </div>
  </section>

</main>

<script src="/js/inner.js" defer></script>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
