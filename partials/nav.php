<?php $isHome = ($_SERVER['REQUEST_URI'] === '/' || str_starts_with($_SERVER['REQUEST_URI'], '/index')); ?>
<nav class="nav" id="nav">
  <div class="nav-inner">
    <a class="nav-logo" href="<?= $isHome ? '#inicio' : '/' ?>">
      <img src="/assets/logo-legaltec.png" alt="F&P Legaltec — Abogados y Asesores">
    </a>
    <div class="nav-links">
      <a class="nav-link" href="<?= $isHome ? '#nosotros' : '/#nosotros' ?>">El despacho</a>
      <a class="nav-link" href="<?= $isHome ? '#servicios-juridicos' : '/servicios/' ?>">Servicios jurídicos</a>
      <a class="nav-link" href="<?= $isHome ? '#tecnologia' : '/legaltech/' ?>">Legaltech</a>
      <a class="nav-link" href="<?= $isHome ? '#equipo' : '/#equipo' ?>">Equipo</a>
      <a class="nav-link" href="<?= $isHome ? '#contacto' : '/#contacto' ?>">Contacto</a>
    </div>
    <a class="nav-cta" href="<?= $isHome ? '#contacto' : '/#contacto' ?>">Consulta gratuita</a>
    <button class="nav-hamburger" id="hamburger" aria-label="Abrir menú">
      <span></span><span></span><span></span>
    </button>
  </div>
</nav>
<div class="nav-mobile" id="navMobile">
  <a class="nav-link" href="<?= $isHome ? '#nosotros' : '/#nosotros' ?>">El despacho</a>
  <a class="nav-link" href="<?= $isHome ? '#servicios-juridicos' : '/servicios/' ?>">Servicios jurídicos</a>
  <a class="nav-link" href="<?= $isHome ? '#tecnologia' : '/legaltech/' ?>">Legaltech</a>
  <a class="nav-link" href="<?= $isHome ? '#equipo' : '/#equipo' ?>">Equipo</a>
  <a class="nav-link" href="<?= $isHome ? '#contacto' : '/#contacto' ?>">Contacto</a>
  <a class="nav-cta" href="<?= $isHome ? '#contacto' : '/#contacto' ?>">Consulta gratuita</a>
</div>
