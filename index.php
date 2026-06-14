<?php
$title       = "F&P Legaltec — Abogados y legaltech en Lorca, Murcia";
$description = "F&P Legaltec es una cooperativa de asesores jurídicos y tecnológicos en Lorca, Murcia. Derecho laboral, civil, penal, mercantil, extranjería, RGPD e IA aplicada al derecho.";
$canonical   = "https://pflegaltec.com/";
$ogImage     = "https://pflegaltec.com/assets/despacho-hero.webp";
$jsonLd      = <<<'JSON'
{
  "@context": "https://schema.org",
  "@type": "LegalService",
  "@id": "https://pflegaltec.com/#legalservice",
  "name": "F&P Legaltec",
  "alternateName": "Florencio & Partners Legaltec",
  "url": "https://pflegaltec.com/",
  "logo": "https://pflegaltec.com/assets/logo-legaltec.png",
  "image": "https://pflegaltec.com/assets/despacho-hero.webp",
  "telephone": "+34676594016",
  "email": "info@pflegaltec.com",
  "priceRange": "$$",
  "areaServed": [
    {
      "@type": "AdministrativeArea",
      "name": "Región de Murcia"
    },
    {
      "@type": "Country",
      "name": "España"
    }
  ],
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Cuesta de San Francisco nº 5 Entlo",
    "postalCode": "30800",
    "addressLocality": "Lorca",
    "addressRegion": "Murcia",
    "addressCountry": "ES"
  },
  "openingHours": "Mo-Fr 09:00-21:00",
  "founder": {
    "@type": "Person",
    "name": "Miguel Ángel Florencio López",
    "jobTitle": "Abogado coordinador",
    "memberOf": {
      "@type": "Organization",
      "name": "Ilustre Colegio de Abogados de Lorca (ICALOR)"
    }
  },
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Servicios jurídicos y legaltech",
    "itemListElement": [
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Asesoría legal general"}},
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Derecho laboral"}},
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Derecho civil"}},
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Derecho mercantil"}},
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Derecho penal"}},
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Derecho de extranjería"}},
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Protección de datos RGPD"}},
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "IA aplicada al derecho"}},
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Contratos tecnológicos"}}
    ]
  }
}
JSON;

include $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/partials/nav.php';
?>

<!-- ── HERO ──────────────────────────────────── -->
<section class="hero" id="inicio" data-screen-label="01 Hero">
  <div class="hero-grid"></div>
  <div class="hero-glow"></div>
  <div class="hero-glow-2"></div>
  <div class="hero-inner">
    <div class="hero-content">
      <div class="hero-eyebrow">Cooperativa de asesores jurídicos y tecnológicos</div>
      <h1 class="hero-title">
        Treinta años de experiencia.<br>
        <em>La vanguardia del derecho.</em>
      </h1>
      <p class="hero-sub">
        F&amp;P Legaltec une la solidez de más de tres décadas de ejercicio jurídico con las herramientas más avanzadas de la tecnología legal. Derecho penal, civil, mercantil, laboral, extranjería y protección de datos — resueltos con rigor y con inteligencia.
      </p>
      <div class="hero-btns">
        <a class="btn btn-primary" href="#contacto">Solicitar consulta gratuita</a>
        <a class="btn btn-ghost-white" href="#nosotros">Conózcanos</a>
      </div>
      <div class="hero-metrics">
        <div class="hero-metric">
          <div class="metric-num">+30</div>
          <div class="metric-label">Años de experiencia jurídica</div>
        </div>
        <div class="hero-metric">
          <div class="metric-num">+2.500</div>
          <div class="metric-label">Casos gestionados</div>
        </div>
        <div class="hero-metric">
          <div class="metric-num">10</div>
          <div class="metric-label">Áreas de práctica</div>
        </div>
      </div>
    </div>
    <div class="hero-visual">
      <div class="hero-portrait">
        <div class="hero-portrait-frame">
          <img src="/assets/despacho-hero.webp" alt="Despacho de F&P Legaltec" loading="eager">
          <div class="hero-portrait-badge">
            <i class="ph ph-scales"></i>
            <div>
              <strong>+30 años</strong>
              <span>de experiencia jurídica</span>
            </div>
          </div>
        </div>
      </div>
      <div class="hero-cards">
        <div class="hero-card">
          <div class="hero-card-icon"><i class="ph ph-shield-check"></i></div>
          <div>
            <div class="hero-card-title">Protección de datos</div>
            <div class="hero-card-text">Cumplimiento RGPD y auditorías de privacidad para empresas y profesionales.</div>
          </div>
        </div>
        <div class="hero-card">
          <div class="hero-card-icon"><i class="ph ph-scales"></i></div>
          <div>
            <div class="hero-card-title">Derecho en todas sus ramas</div>
            <div class="hero-card-text">Penal, civil, mercantil, laboral, extranjería, propiedad intelectual y más.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ── SOBRE NOSOTROS ────────────────────────── -->
<section class="about" id="nosotros" data-screen-label="02 Nosotros">
  <div class="container">
    <div class="about-inner">
      <div class="about-text">
        <span class="section-label">El despacho</span>
        <h2>Tres décadas de rigor jurídico, <em>reinventadas</em></h2>
        <p>F&amp;P Legaltec es una cooperativa de asesores jurídicos y técnicos especializados en la aplicación de las nuevas tecnologías al derecho. Nacimos de la convicción de que la experiencia tradicional y la innovación digital no son opuestos: son la combinación perfecta.</p>
        <p>Nuestro equipo acumula <strong>más de 30 años de ejercicio activo</strong> en los principales ramos del derecho español. A esa base sólida sumamos herramientas de inteligencia artificial, automatización de procesos legales y asesoramiento tecnológico para empresas y particulares que operan en el entorno digital.</p>
        <p>Un solo despacho. Toda la ley. Toda la tecnología.</p>
        <a class="btn btn-primary" href="#contacto">Contactar con el despacho</a>
      </div>
      <div class="about-right">
        <div class="about-card reveal">
          <div class="about-card-icon"><i class="ph ph-gavel"></i></div>
          <div>
            <h4>Experiencia jurídica consolidada</h4>
            <p>Más de tres décadas resolviendo casos complejos ante juzgados y tribunales de toda España. Conocemos el sistema desde dentro.</p>
          </div>
        </div>
        <div class="about-card reveal">
          <div class="about-card-icon"><i class="ph ph-cpu"></i></div>
          <div>
            <h4>Tecnología legal de vanguardia</h4>
            <p>Integramos IA, legaltech y automatización en cada proceso. Más velocidad, más precisión, costes optimizados para el cliente.</p>
          </div>
        </div>
        <div class="about-card reveal">
          <div class="about-card-icon"><i class="ph ph-users-three"></i></div>
          <div>
            <h4>Equipo multidisciplinar</h4>
            <p>Juristas, asesores tecnológicos y especialistas en protección de datos trabajando de forma coordinada en cada asunto.</p>
          </div>
        </div>
        <div class="about-card about-dark reveal">
          <div class="about-card-icon"><i class="ph ph-handshake"></i></div>
          <div>
            <h4>Compromiso con cada cliente</h4>
            <p>Sin letra pequeña. Primera consulta siempre gratuita. Honorarios claros. Actualizaciones constantes del estado de su caso.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ── SERVICIOS JURÍDICOS ───────────────────── -->
<section class="services-legal" id="servicios-juridicos" data-screen-label="03 Servicios jurídicos">
  <div class="container">
    <div class="section-head">
      <span class="section-label">Servicios jurídicos</span>
      <h2>Asesoramiento legal experto en todas las ramas del derecho</h2>
      <p>Cubrimos íntegramente las necesidades jurídicas de personas físicas, autónomos y empresas, con un enfoque práctico y orientado a resultados.</p>
    </div>
    <div class="services-grid">

      <div class="service-card reveal">
        <div class="card-icon"><i class="ph ph-briefcase"></i></div>
        <h3>Asesoría legal general</h3>
        <p>Orientación jurídica integral para toda situación legal: contratos, reclamaciones, consultas puntuales y acompañamiento continuo con visión estratégica.</p>
        <a class="card-link" href="/servicios/asesoria-legal-general/">Consultar <i class="ph ph-arrow-right" style="font-size:12px"></i></a>
      </div>

      <div class="service-card reveal">
        <div class="card-icon"><i class="ph ph-hard-hat"></i></div>
        <h3>Derecho laboral</h3>
        <p>Defensa del trabajador y asesoramiento a empresas: despidos, EREs, acoso laboral, accidentes de trabajo, reclamaciones salariales y negociación colectiva.</p>
        <a class="card-link" href="/servicios/derecho-laboral/">Consultar <i class="ph ph-arrow-right" style="font-size:12px"></i></a>
      </div>

      <div class="service-card reveal">
        <div class="card-icon"><i class="ph ph-scales"></i></div>
        <h3>Derecho civil</h3>
        <p>Divorcios, herencias, arrendamientos, compraventas inmobiliarias, reclamaciones de cantidad y litigios entre particulares ante los tribunales civiles.</p>
        <a class="card-link" href="/servicios/derecho-civil/">Consultar <i class="ph ph-arrow-right" style="font-size:12px"></i></a>
      </div>

      <div class="service-card reveal">
        <div class="card-icon"><i class="ph ph-storefront"></i></div>
        <h3>Derecho mercantil</h3>
        <p>Constitución de sociedades, contratos mercantiles, fusiones, reclamaciones entre empresas y procesos concursales. Asesoramiento continuo para pymes y startups.</p>
        <a class="card-link" href="/servicios/derecho-mercantil/">Consultar <i class="ph ph-arrow-right" style="font-size:12px"></i></a>
      </div>

      <div class="service-card reveal">
        <div class="card-icon"><i class="ph ph-gavel"></i></div>
        <h3>Derecho penal</h3>
        <p>Defensa integral en procedimientos penales: instrucción, juicio oral, recursos. Especialización en delitos informáticos, económicos y corporativos.</p>
        <a class="card-link" href="/servicios/derecho-penal/">Consultar <i class="ph ph-arrow-right" style="font-size:12px"></i></a>
      </div>

      <div class="service-card reveal">
        <div class="card-icon"><i class="ph ph-globe"></i></div>
        <h3>Derecho de extranjería</h3>
        <p>NIE, residencias, visados de trabajo y estudio, reagrupación familiar, recursos contra denegaciones y tramitación de la nacionalidad española.</p>
        <a class="card-link" href="/servicios/extranjeria-lorca/">Consultar <i class="ph ph-arrow-right" style="font-size:12px"></i></a>
      </div>

    </div>
  </div>
</section>

<!-- ── TECNOLOGÍA LEGAL ──────────────────────── -->
<section class="tech-section" id="tecnologia" data-screen-label="04 Legaltech">
  <div class="container">
    <div class="tech-inner">
      <div class="tech-text">
        <div class="tech-badge"><i class="ph ph-cpu" style="font-size:12px"></i> Legaltech</div>
        <h2>La tecnología al servicio <em>de su defensa</em></h2>
        <p>Somos asesores técnicos especializados en la digitalización del derecho. Acompañamos a empresas y profesionales en la transformación de sus procesos jurídicos y en el cumplimiento de la normativa tecnológica vigente.</p>
        <div class="tech-features">
          <div class="tech-feature">
            <div class="tech-feature-icon"><i class="ph ph-robot"></i></div>
            <div>
              <h4>IA aplicada al derecho</h4>
              <p>Análisis predictivo de jurisprudencia, redacción asistida de documentos legales y automatización de due diligence.</p>
            </div>
          </div>
          <div class="tech-feature">
            <div class="tech-feature-icon"><i class="ph ph-shield-check"></i></div>
            <div>
              <h4>Protección de datos y privacidad (RGPD)</h4>
              <p>Auditorías de cumplimiento, registro de actividades, delegados de protección de datos y respuesta ante brechas de seguridad.</p>
              <a class="card-link" href="/legaltech/proteccion-datos-rgpd.php" style="margin-top:8px">Ver servicio RGPD <i class="ph ph-arrow-right" style="font-size:12px"></i></a>
            </div>
          </div>
          <div class="tech-feature">
            <div class="tech-feature-icon"><i class="ph ph-lightning"></i></div>
            <div>
              <h4>Legaltech y automatización de procesos</h4>
              <p>Implantamos sistemas que reducen tiempos y errores en la gestión documental, contratos y expedientes legales.</p>
            </div>
          </div>
          <div class="tech-feature">
            <div class="tech-feature-icon"><i class="ph ph-buildings"></i></div>
            <div>
              <h4>Transformación digital de empresas</h4>
              <p>Asesoramiento jurídico-tecnológico en proyectos de digitalización: contratos cloud, SLAs, cumplimiento normativo digital.</p>
            </div>
          </div>
        </div>
        <a class="btn btn-primary" href="#contacto">Solicitar asesoramiento tech</a>
      </div>
      <div class="tech-grid">
        <div class="tech-card reveal">
          <div class="tech-card-head">
            <div class="tech-card-icon"><i class="ph ph-certificate"></i></div>
            <div class="tech-card-title">Propiedad intelectual digital</div>
          </div>
          <p>Registro y defensa de marcas, software, contenidos digitales y activos tecnológicos. Licencias y contratos de software.</p>
        </div>
        <div class="tech-card reveal">
          <div class="tech-card-head">
            <div class="tech-card-icon"><i class="ph ph-bug"></i></div>
            <div class="tech-card-title">Ciberseguridad legal</div>
          </div>
          <p>Asesoramiento ante incidentes de ciberseguridad, delitos informáticos y responsabilidad civil derivada de vulneraciones de datos.</p>
        </div>
        <div class="tech-card reveal">
          <div class="tech-card-head">
            <div class="tech-card-icon"><i class="ph ph-file-code"></i></div>
            <div class="tech-card-title">Contratos tecnológicos</div>
          </div>
          <p>Redacción y revisión de contratos de desarrollo de software, acuerdos de servicio (SaaS), términos de uso y políticas de privacidad.</p>
        </div>
        <div class="tech-card reveal">
          <div class="tech-card-head">
            <div class="tech-card-icon"><i class="ph ph-rocket-launch"></i></div>
            <div class="tech-card-title">Startups y empresas tech</div>
          </div>
          <p>Constitución, financiación, pactos de socios, propiedad intelectual y cumplimiento normativo para empresas tecnológicas en crecimiento.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ── POR QUÉ ELEGIRNOS ─────────────────────── -->
<section class="why" id="por-que" data-screen-label="05 Diferenciadores">
  <div class="container">
    <div class="section-head">
      <span class="section-label">Por qué elegirnos</span>
      <h2>Lo que nos diferencia</h2>
      <p>No somos un despacho al uso. Somos la intersección entre la tradición jurídica más sólida y la innovación tecnológica más exigente.</p>
    </div>
    <div class="why-grid">
      <div class="why-card reveal">
        <div class="why-num">01</div>
        <h3>Experiencia sin compromiso</h3>
        <p>Más de 30 años de ejercicio activo garantizan que su caso está en manos de profesionales que conocen cada recodo del sistema judicial español.</p>
      </div>
      <div class="why-card reveal">
        <div class="why-num">02</div>
        <h3>Tecnología como ventaja</h3>
        <p>La inteligencia artificial y las herramientas legaltech nos permiten analizar más rápido, documentar mejor y anticipar riesgos que otros despachos no detectan.</p>
      </div>
      <div class="why-card reveal">
        <div class="why-num">03</div>
        <h3>Un despacho, todo el derecho</h3>
        <p>No necesita coordinar varios abogados de distintos ámbitos. Nosotros cubrimos todas las ramas: un único interlocutor para toda su situación legal.</p>
      </div>
      <div class="why-card reveal">
        <div class="why-num">04</div>
        <h3>Transparencia total</h3>
        <p>Honorarios claros desde el primer día. Le informamos puntualmente de cada avance. Sin sorpresas, sin letra pequeña, sin gastos ocultos.</p>
      </div>
      <div class="why-card reveal">
        <div class="why-num">05</div>
        <h3>Cooperativa comprometida</h3>
        <p>Como cooperativa, cada profesional es propietario del proyecto. Eso se traduce en una implicación personal muy superior a la de un empleado de un gran bufete.</p>
      </div>
      <div class="why-card reveal">
        <div class="why-num">06</div>
        <h3>Primera consulta gratuita</h3>
        <p>Sin compromiso. Cuéntenos su situación y le daremos una valoración honesta. Si podemos ayudarle, le explicaremos exactamente cómo y cuánto.</p>
      </div>
    </div>
    <div class="why-highlight">
      <div class="why-highlight-text">
        <h3>¿Empresa que afronta un reto legal <em>y tecnológico</em>?</h3>
        <p>Somos el único equipo que puede asesorarle simultáneamente en los aspectos jurídicos y en los técnicos de su proyecto de transformación digital, protección de datos o disputa ante tribunales.</p>
      </div>
      <div class="why-highlight-cta">
        <a class="btn btn-primary" href="#contacto">Hablemos de su caso</a>
      </div>
    </div>
  </div>
</section>

<!-- ── CASOS DE USO ──────────────────────────── -->
<section class="cases" id="casos" data-screen-label="06 Casos de uso">
  <div class="container">
    <div class="section-head">
      <span class="section-label">Casos de uso</span>
      <h2>Situaciones reales que resolvemos</h2>
      <p>Ejemplos de cómo la combinación de experiencia jurídica y tecnología produce resultados superiores para nuestros clientes.</p>
    </div>
    <div class="cases-grid">
      <div class="case-card reveal">
        <div class="case-tag legal"><i class="ph ph-hard-hat" style="font-size:11px"></i> Derecho laboral</div>
        <h3>Despido improcedente en empresa tecnológica</h3>
        <p>Un desarrollador de software fue despedido alegando causas objetivas. Mediante análisis documental automatizado detectamos incoherencias en la documentación aportada por la empresa, lo que permitió negociar una indemnización un 40% superior a la mínima legal.</p>
        <div class="case-result"><i class="ph ph-check-circle"></i> Acuerdo extrajudicial favorable en 6 semanas</div>
      </div>
      <div class="case-card dark reveal">
        <div class="case-tag tech"><i class="ph ph-shield-check" style="font-size:11px"></i> Protección de datos</div>
        <h3>Brecha de seguridad en e-commerce: crisis gestionada</h3>
        <p>Una tienda online sufrió un acceso no autorizado a la base de datos de clientes. Coordinamos la respuesta legal ante la AEPD, gestionamos las notificaciones obligatorias y minimizamos la sanción mediante una actuación rápida y documentada.</p>
        <div class="case-result"><i class="ph ph-check-circle"></i> Sanción reducida en un 75% por actuación diligente</div>
      </div>
      <div class="case-card dark reveal">
        <div class="case-tag tech"><i class="ph ph-rocket-launch" style="font-size:11px"></i> Startups</div>
        <h3>Constitución y protección legal de startup SaaS</h3>
        <p>Acompañamos a tres socios fundadores en la creación de su empresa tecnológica: pacto de socios, registro de la marca y nombre de dominio, contratos con primeros clientes, términos de uso y política de privacidad conformes con el RGPD.</p>
        <div class="case-result"><i class="ph ph-check-circle"></i> Empresa operativa y protegida en 3 semanas</div>
      </div>
      <div class="case-card reveal">
        <div class="case-tag legal"><i class="ph ph-scales" style="font-size:11px"></i> Derecho civil</div>
        <h3>Herencia compleja con activos digitales y cuentas en el extranjero</h3>
        <p>La liquidación de una herencia con criptodivisas, cuentas bancarias en tres países y derechos de autor sobre software requirió coordinar la normativa española, europea y los convenios internacionales vigentes. Resolución íntegra en primera instancia.</p>
        <div class="case-result"><i class="ph ph-check-circle"></i> Herencia adjudicada sin litigio en 4 meses</div>
      </div>
    </div>
  </div>
</section>

<!-- ── EQUIPO ─────────────────────────────────── -->
<section class="team" id="equipo" data-screen-label="07 Equipo">
  <div class="container">
    <div class="section-head">
      <span class="section-label">El equipo</span>
      <h2>Profesionales que unen ley y tecnología</h2>
    </div>
    <div class="team-lead">
      <div class="team-lead-photo">
        <img src="/assets/miguel-angel.jpg" alt="Miguel Ángel Florencio López" loading="lazy" onerror="this.style.display='none'">
        <div class="team-lead-placeholder">
          <i class="ph ph-user"></i>
          <span>Foto pendiente</span>
        </div>
      </div>
      <div class="team-lead-info">
        <span class="team-lead-tag">Coordinador del equipo</span>
        <h3>Miguel Ángel Florencio López</h3>
        <div class="team-lead-cred">
          <span><i class="ph ph-certificate"></i> Colegiado ICALOR</span>
          <span><i class="ph ph-users-three"></i> Coordinador de la Cooperativa Legaltec</span>
        </div>
        <p class="team-lead-bio">Coordino y lidero un equipo formado por <strong>más de 30 profesionales independientes</strong> — abogados, docentes, programadores, asesores fiscales y otros especialistas — con los que trabajo de forma coordinada y cooperativa. De esa colaboración nacen las sinergias que ponemos a disposición de nuestros clientes: una red de talento multidisciplinar que combina la experiencia jurídica tradicional con las nuevas tecnologías aplicadas al derecho.</p>
        <div class="team-lead-stats">
          <div>
            <strong>+30</strong>
            <span>Profesionales colaboradores</span>
          </div>
          <div>
            <strong>5</strong>
            <span>Disciplinas integradas</span>
          </div>
          <div>
            <strong>1</strong>
            <span>Equipo coordinado</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ── PROCESO ───────────────────────────────── -->
<section class="process" id="proceso" data-screen-label="08 Proceso">
  <div class="container">
    <div class="section-head">
      <span class="section-label">Cómo trabajamos</span>
      <h2>Un proceso claro, de principio a fin</h2>
    </div>
    <div class="process-steps">
      <div class="step reveal">
        <div class="step-num">1</div>
        <h4>Consulta gratuita</h4>
        <p>Contacte sin compromiso. Escuchamos su situación, valoramos el caso y le explicamos las opciones disponibles.</p>
      </div>
      <div class="step reveal">
        <div class="step-num">2</div>
        <h4>Análisis inteligente</h4>
        <p>Combinamos la experiencia de nuestros juristas con herramientas de IA para identificar los argumentos más sólidos y anticipar riesgos.</p>
      </div>
      <div class="step reveal">
        <div class="step-num">3</div>
        <h4>Estrategia y acción</h4>
        <p>Diseñamos una estrategia legal a medida y actuamos con diligencia: redactamos, presentamos y defendemos en todas las instancias.</p>
      </div>
      <div class="step reveal">
        <div class="step-num">4</div>
        <h4>Resolución y seguimiento</h4>
        <p>Le informamos en tiempo real de cada avance. Trabajamos hasta alcanzar el mejor resultado posible y más allá si lo necesita.</p>
      </div>
    </div>
  </div>
</section>

<!-- ── CONTACTO ──────────────────────────────── -->
<section class="contact" id="contacto" data-screen-label="09 Contacto">
  <div class="container">
    <div class="contact-inner">
      <div class="contact-info">
        <span class="section-label">Contacto</span>
        <h2>Cuéntenos su caso. Le damos una respuesta honesta.</h2>
        <p>Primera consulta siempre gratuita y sin compromiso. Le respondemos en menos de 24 horas.</p>
        <div class="contact-detail">
          <div class="contact-icon"><i class="ph ph-phone"></i></div>
          <div><strong>Teléfono móvil</strong><span>+34 676594016</span></div>
        </div>
        <div class="contact-detail">
          <div class="contact-icon"><i class="ph ph-envelope"></i></div>
          <div><strong>Email</strong><span>info@pflegaltec.com</span></div>
        </div>
        <div class="contact-detail">
          <div class="contact-icon"><i class="ph ph-map-pin"></i></div>
          <div><strong>Dirección</strong><span>Cuesta de San Francisco nº 5 Entlo, CP 30800 Lorca (Murcia)</span></div>
        </div>
        <div class="contact-detail">
          <div class="contact-icon"><i class="ph ph-clock"></i></div>
          <div><strong>Horario</strong><span>Lunes a viernes, 9:00 – 21:00</span></div>
        </div>
        <div class="contact-privacy">
          <i class="ph ph-lock-simple"></i>
          <p>Sus datos son tratados con total confidencialidad conforme al RGPD. No se comparten con terceros.</p>
        </div>
      </div>
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/contact-form.php'; ?>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
