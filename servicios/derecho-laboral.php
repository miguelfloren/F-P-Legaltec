<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/lib/schemas/legal-service.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lib/schemas/breadcrumb.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lib/schemas/faq.php';

$title       = 'Abogado laboral en Lorca y Murcia — Despidos, EREs y Reclamaciones | F&P Legaltec';
$description = 'Especialistas en derecho laboral en Lorca y Murcia. Despidos improcedentes, EREs, acoso laboral y reclamaciones salariales. Más de 30 años de experiencia. Primera consulta gratuita.';
$canonical   = 'https://pflegaltec.com/servicios/derecho-laboral/';
$ogImage     = 'https://pflegaltec.com/assets/og-servicios.jpg';

$breadcrumb = [
  ['name' => 'Inicio',              'url' => '/'],
  ['name' => 'Servicios jurídicos', 'url' => '/servicios/'],
  ['name' => 'Derecho laboral'],
];

// Single source of truth for the FAQ: used for both the visible accordion
// and the FAQPage structured data, so they can never drift apart.
$faqs = [
  '¿Cuánto tiempo tengo para recurrir un despido?' =>
    'El plazo para impugnar un despido es de 20 días hábiles desde la fecha de efectividad del despido. Es un plazo de caducidad, no de prescripción, lo que significa que una vez transcurrido no puede recuperarse por ningún motivo. No cuente fines de semana ni festivos, pero actúe con rapidez desde el primer día.',
  '¿Qué diferencia hay entre despido improcedente y despido nulo?' =>
    'El despido improcedente ocurre cuando el empresario no acredita la causa alegada o no cumple los requisitos formales (carta de despido, plazo de preaviso). La consecuencia es que la empresa puede elegir entre readmitir o pagar una indemnización de 33 días por año trabajado. El despido nulo se produce cuando vulnera derechos fundamentales — embarazo, maternidad, baja médica en ciertos casos, actividad sindical — y obliga a la readmisión inmediata con abono de salarios de tramitación.',
  '¿Qué es un ERE y cómo puedo impugnarlo?' =>
    'Un ERE (Expediente de Regulación de Empleo) es un procedimiento para extinguir o suspender contratos de trabajo por causas económicas, técnicas, organizativas o productivas. Puede impugnarse individualmente ante el Juzgado de lo Social si la empresa no acredita suficientemente las causas, no respeta el periodo de consultas o aplica criterios de selección discriminatorios. El plazo de impugnación individual es de 20 días hábiles desde la comunicación del despido.',
  '¿Cuánto me corresponde si mi despido es improcedente?' =>
    'La indemnización es de 33 días de salario por año trabajado con un máximo de 24 mensualidades, para contratos posteriores a febrero de 2012. Para los tramos de contrato anteriores a esa fecha, el cálculo se hace a 45 días por año con un máximo de 42 mensualidades. El salario regulador incluye salario base más todos los complementos de carácter fijo, lo que en la práctica puede ser significativamente mayor al salario base.',
  '¿Qué se considera acoso laboral y cómo se prueba?' =>
    'El acoso laboral (mobbing) es una conducta reiterada y sistemática — no un hecho aislado — dirigida a deteriorar el ambiente de trabajo con el objetivo de que el trabajador abandone o sufra daño psicológico. Las pruebas más valiosas son correos y mensajes escritos, testigos, informes médicos o psicológicos, y el registro del protocolo de acoso interno si existe. Documentar cada incidente desde el primer momento es fundamental: guarde fechas, descripciones detalladas y cualquier prueba escrita.',
];

$jsonLd = [
  pfl_legal_service_schema(
    'Derecho laboral — F&P Legaltec',
    'Abogados especialistas en despidos improcedentes, EREs, acoso laboral y reclamaciones salariales en Lorca y Murcia.',
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
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/></svg>
          Servicios jurídicos · Derecho laboral
        </div>
        <h1>Abogados laboralistas<br />en <em>Lorca y Murcia</em></h1>
        <p class="hero-desc">
          Defendemos los derechos de trabajadores y empresas en despidos, EREs, acoso laboral, reclamaciones salariales e incapacidades. Más de treinta años de experiencia en los juzgados de lo social de Murcia.
        </p>
        <div class="hero-actions">
          <a href="/contacto/" class="btn-primary">
            Consulta gratuita
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="#servicios-laborales" class="btn-ghost">Ver todos los servicios</a>
        </div>
      </div>
      <div class="hero-stats" aria-label="Datos destacados">
        <div class="stat-card">
          <div class="stat-num">+30</div>
          <div class="stat-label">Años de experiencia</div>
        </div>
        <div class="stat-card">
          <div class="stat-num">20</div>
          <div class="stat-label">Días para recurrir</div>
        </div>
        <div class="stat-card">
          <div class="stat-num">33</div>
          <div class="stat-label">Días/año de indemnización</div>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="intro-alert" role="note">
      <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
      <p>
        <strong>El plazo para impugnar un despido es de solo 20 días hábiles.</strong> Es un plazo de caducidad: una vez transcurrido, no puede recuperarse. Si ha sido despedido o está ante un procedimiento disciplinario, contacte con nosotros hoy mismo para analizar su situación sin compromiso.
      </p>
    </div>
  </div>

  <!-- SERVICIOS -->
  <section id="servicios-laborales" class="section-light" aria-labelledby="srv-title">
    <div class="container">
      <span class="section-label">Qué hacemos</span>
      <h2 id="srv-title">Defensa laboral <em>completa</em></h2>
      <p class="section-intro">Cubrimos todas las situaciones laborales de trabajadores y empresas, desde el asesoramiento preventivo hasta la defensa en juicio.</p>
      <div class="services-grid" role="list">

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
          </div>
          <h3>Despido improcedente y nulo</h3>
          <p>Análisis del despido, negociación del acta de conciliación e impugnación judicial. Maximizamos la indemnización o conseguimos la readmisión cuando procede.</p>
          <ul>
            <li>Revisión de la carta de despido</li>
            <li>Conciliación previa obligatoria</li>
            <li>Demanda ante el Juzgado de lo Social</li>
            <li>Recursos ante el TSJ de Murcia</li>
          </ul>
        </article>

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
          </div>
          <h3>Reclamación de salarios</h3>
          <p>Reclamamos cantidades adeudadas: salarios impagados, horas extra no abonadas, complementos y liquidaciones incorrectas.</p>
          <ul>
            <li>Cálculo de cantidades debidas</li>
            <li>Papeleta de conciliación</li>
            <li>Demanda de cantidad</li>
            <li>Ejecución de sentencia</li>
          </ul>
        </article>

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
          </div>
          <h3>EREs y despidos colectivos</h3>
          <p>Asesoramiento e impugnación de EREs tanto para trabajadores individuales como para representantes sindicales durante el periodo de consultas.</p>
          <ul>
            <li>Análisis de la documentación económica</li>
            <li>Negociación en el periodo de consultas</li>
            <li>Impugnación individual y colectiva</li>
            <li>Acciones ante la Inspección de Trabajo</li>
          </ul>
        </article>

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="10"/><line x1="4.93" y1="4.93" x2="19.07" y2="19.07"/></svg>
          </div>
          <h3>Acoso laboral y discriminación</h3>
          <p>Defensa ante situaciones de mobbing, acoso sexual o discriminación en el trabajo. Asesoramos en la recogida de pruebas y en la vía judicial más adecuada.</p>
          <ul>
            <li>Activación del protocolo de acoso</li>
            <li>Denuncia ante la Inspección de Trabajo</li>
            <li>Demanda por daños y perjuicios</li>
            <li>Tutela de derechos fundamentales</li>
          </ul>
        </article>

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
          </div>
          <h3>Incapacidades y accidentes de trabajo</h3>
          <p>Reclamaciones ante el INSS por incapacidad temporal, permanente y accidentes laborales. Impugnación de altas médicas prematuras y recargos de prestaciones.</p>
          <ul>
            <li>Impugnación de resoluciones del INSS</li>
            <li>Recargo de prestaciones por falta de medidas</li>
            <li>Reclamación de daños al empresario</li>
            <li>Coordinación con médicos especialistas</li>
          </ul>
        </article>

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
          </div>
          <h3>Asesoría laboral para empresas</h3>
          <p>Acompañamiento jurídico continuo a empresas: contratación, modificaciones sustanciales, sanciones disciplinarias y relaciones con la representación de los trabajadores.</p>
          <ul>
            <li>Redacción y revisión de contratos</li>
            <li>Procedimientos disciplinarios</li>
            <li>Modificaciones de condiciones de trabajo</li>
            <li>Negociación con comités de empresa</li>
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
      <p class="section-intro">Un proceso claro y eficiente. Le explicamos cada paso y le mantenemos informado en todo momento.</p>
      <div class="process-grid" role="list">
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">01</div>
          <h3>Consulta gratuita</h3>
          <p>Analizamos su situación laboral sin compromiso. Valoramos las opciones disponibles y el pronóstico realista de cada una.</p>
        </div>
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">02</div>
          <h3>Revisión documental</h3>
          <p>Contrato, nóminas, carta de despido o comunicación empresarial. Identificamos errores formales y vulneraciones de derechos.</p>
        </div>
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">03</div>
          <h3>Estrategia y plazos</h3>
          <p>Le explicamos qué vía es más conveniente — negociación, conciliación o juicio — y los plazos exactos para cada acción.</p>
        </div>
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">04</div>
          <h3>Conciliación previa</h3>
          <p>Representación en el acto de conciliación obligatorio ante el SMAC. Muchos casos se resuelven aquí con condiciones ventajosas.</p>
        </div>
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">05</div>
          <h3>Juicio laboral</h3>
          <p>Si no hay acuerdo, defendemos su caso ante el Juzgado de lo Social. Experiencia acumulada en cientos de vistas en Murcia y Lorca.</p>
        </div>
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">06</div>
          <h3>Ejecución y recursos</h3>
          <p>Si la sentencia es favorable, ejecutamos el fallo. Si no, valoramos con usted la viabilidad del recurso ante el TSJ de Murcia.</p>
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
          <h2 id="why-title">Laboralistas con <em>experiencia real</em> en Murcia</h2>
          <p class="section-intro" style="margin-bottom:36px">No somos un despacho generalista que hace de todo. Llevamos décadas en los juzgados de lo social de Lorca y Murcia.</p>
          <div class="why-list" role="list">
            <div class="why-item" role="listitem">
              <div class="why-bullet" aria-hidden="true">01</div>
              <div class="why-item-text">
                <h3>Conocimiento del entorno local</h3>
                <p>Conocemos los convenios colectivos de los principales sectores de Lorca y Murcia: agricultura, construcción, hostelería y servicios.</p>
              </div>
            </div>
            <div class="why-item" role="listitem">
              <div class="why-bullet" aria-hidden="true">02</div>
              <div class="why-item-text">
                <h3>Respuesta inmediata</h3>
                <p>Los plazos laborales son muy cortos. Le atendemos con urgencia para no perder ninguna acción por razones de tiempo.</p>
              </div>
            </div>
            <div class="why-item" role="listitem">
              <div class="why-bullet" aria-hidden="true">03</div>
              <div class="why-item-text">
                <h3>Honorarios transparentes</h3>
                <p>Le informamos del coste antes de empezar. Sin sorpresas. En muchos casos de despido la primera consulta y la conciliación no tienen coste.</p>
              </div>
            </div>
            <div class="why-item" role="listitem">
              <div class="why-bullet" aria-hidden="true">04</div>
              <div class="why-item-text">
                <h3>Tecnología legaltech al servicio del caso</h3>
                <p>Usamos herramientas de IA para analizar jurisprudencia reciente y encontrar precedentes favorables que refuerzan su defensa.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="why-cta-box">
          <div class="big-quote" aria-hidden="true">"</div>
          <blockquote>"Conseguimos la readmisión de un trabajador tras demostrar que el despido encubría represalias por su actividad sindical."</blockquote>
          <cite>— Caso real: trabajador de empresa del sector servicios, Lorca</cite>
          <div style="background:var(--navy-border);height:1px;margin-bottom:28px"></div>
          <p style="font-size:14px;color:var(--gray);margin-bottom:20px">Resultado: <strong style="color:var(--gold)">despido declarado nulo</strong> con readmisión y abono de salarios de tramitación.</p>
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
      <p class="section-intro">Las dudas más habituales sobre despidos, reclamaciones y procedimientos laborales.</p>
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
  $ctaTitle = '¿Le han despedido o tiene<br />un <em>conflicto laboral</em>?';
  $ctaDesc  = 'Primera consulta gratuita y sin compromiso. Analizamos su caso y le explicamos opciones reales. Respondemos en menos de 24 horas.';
  require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/cta-banner.php';
  ?>

  <!-- RELACIONADOS -->
  <section class="section-light" aria-labelledby="rel-title">
    <div class="container">
      <span class="section-label">También le puede interesar</span>
      <h2 id="rel-title">Otros servicios <em>jurídicos</em></h2>
      <p class="section-intro">Cubrimos todas las necesidades legales de particulares y empresas en Lorca y Murcia.</p>
      <div class="related-grid" role="list">
        <a href="/servicios/derecho-civil/" class="related-card" role="listitem">
          <p class="related-tag">Servicios jurídicos</p>
          <h3>Derecho civil</h3>
          <p>Contratos, herencias, divorcios y reclamaciones patrimoniales. Protegemos su patrimonio y sus derechos.</p>
          <span class="related-link">Saber más <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </a>
        <a href="/servicios/extranjeria-lorca/" class="related-card" role="listitem">
          <p class="related-tag">Servicios jurídicos</p>
          <h3>Extranjería en Lorca</h3>
          <p>NIE, TIE, autorizaciones de residencia y trabajo, reagrupación familiar y nacionalidad española.</p>
          <span class="related-link">Saber más <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </a>
        <a href="/legaltech/proteccion-datos-rgpd/" class="related-card" role="listitem">
          <p class="related-tag">Legaltech</p>
          <h3>Protección de datos y RGPD</h3>
          <p>Auditorías RGPD, registro de actividades y DPD externo para empresas en Lorca y Murcia.</p>
          <span class="related-link">Saber más <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </a>
      </div>
    </div>
  </section>

</main>

<script src="/js/inner.js" defer></script>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
