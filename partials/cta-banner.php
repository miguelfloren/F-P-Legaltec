<?php
$ctaTitle = $ctaTitle ?? '¿Necesita asesoramiento jurídico?';
$ctaDesc  = $ctaDesc  ?? 'Primera consulta gratuita y sin compromiso. Le respondemos en menos de 24 horas.';
$ctaHref  = $ctaHref  ?? '/contacto/';
?>
<div class="container">
  <div class="cta-banner" role="complementary">
    <div>
      <h2><?= $ctaTitle ?></h2>
      <p><?= htmlspecialchars($ctaDesc) ?></p>
    </div>
    <div class="cta-actions">
      <a href="<?= htmlspecialchars($ctaHref) ?>" class="btn-primary">
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
