// ── WHATSAPP BUTTON ────────────────────────────
(function() {
  var btn = document.getElementById('whatsapp-btn');
  if (btn && typeof CONFIG !== 'undefined' && CONFIG.WHATSAPP_NUMBER) {
    var msg = encodeURIComponent('Hola, me gustaría consultar sobre sus servicios legales.');
    btn.href = 'https://wa.me/' + CONFIG.WHATSAPP_NUMBER + '?text=' + msg;
  }
})();

// ── HAMBURGER ─────────────────────────────────
var hamburger = document.getElementById('hamburger');
var navMobile = document.getElementById('navMobile');
hamburger.addEventListener('click', function() {
  navMobile.classList.toggle('open');
});

// ── SMOOTH SCROLL ──────────────────────────────
document.querySelectorAll('a[href^="#"]').forEach(function(a) {
  a.addEventListener('click', function(e) {
    var id = a.getAttribute('href');
    if (id === '#') return;
    var el = document.querySelector(id);
    if (el) {
      e.preventDefault();
      var top = el.getBoundingClientRect().top + window.pageYOffset - 84;
      window.scrollTo({ top: top, behavior: 'smooth' });
      navMobile.classList.remove('open');
    }
  });
});

// ── NAV ON SCROLL ──────────────────────────────
var nav = document.getElementById('nav');
window.addEventListener('scroll', function() {
  if (window.scrollY > 16) {
    nav.style.background = 'rgba(20,25,36,0.97)';
    nav.style.borderBottomColor = 'rgba(255,255,255,0.10)';
  } else {
    nav.style.background = 'rgba(20,25,36,0.94)';
    nav.style.borderBottomColor = 'rgba(255,255,255,0.06)';
  }
});

// ── COPYRIGHT DINÁMICO ─────────────────────────
(function() {
  var now = new Date();
  var meses = ['enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre'];
  var texto = '© ' + now.getFullYear() + ' — ' + meses[now.getMonth()] + ' · F&P Legaltec · Todos los derechos reservados.';
  var el = document.getElementById('footer-legal');
  if (el) el.textContent = texto;
})();

// ── REVEAL ON SCROLL ───────────────────────────
if ('IntersectionObserver' in window) {
  var obs = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        obs.unobserve(entry.target);
      }
    });
  }, { threshold: 0.10 });
  document.querySelectorAll('.reveal').forEach(function(el) { obs.observe(el); });
}
