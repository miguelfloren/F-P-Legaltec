// ── FORM SUBMIT ───────────────────────────────
document.getElementById('formSubmit').addEventListener('click', async function() {
  if (document.getElementById('website').value) return;

  var invalid = false;
  ['nombre', 'email', 'area'].forEach(function(id) {
    var el = document.getElementById(id);
    if (!el.value.trim()) {
      invalid = true;
      el.style.borderColor = '#c9504a';
      el.style.boxShadow = '0 0 0 3px rgba(201,80,74,0.12)';
      el.addEventListener('input', function() {
        el.style.borderColor = '';
        el.style.boxShadow = '';
      }, { once: true });
    }
  });

  var consent = document.getElementById('consentRgpd');
  var consentErr = document.getElementById('consentError');
  if (consent && !consent.checked) {
    invalid = true;
    var consentGroup = consent.closest('.form-group');
    if (consentGroup) consentGroup.style.color = '#c9504a';
    if (!consentErr) {
      consentErr = document.createElement('p');
      consentErr.id = 'consentError';
      consentErr.style.cssText = 'color:#c9504a;font-size:13px;margin-top:6px;';
      consentErr.textContent = 'Debe aceptar la política de privacidad para enviar el formulario.';
      if (consentGroup) consentGroup.appendChild(consentErr);
    }
    consent.addEventListener('change', function() {
      if (consentGroup) consentGroup.style.color = '';
      if (consentErr) consentErr.remove();
    }, { once: true });
  }

  if (invalid) return;

  var btn = document.getElementById('formSubmit');
  btn.disabled = true;
  btn.textContent = 'Enviando…';

  try {
    var res = await fetch(CONFIG.SUPABASE_URL + '/functions/v1/lead', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'Authorization': 'Bearer ' + CONFIG.SUPABASE_ANON_KEY,
      },
      body: JSON.stringify({
        nombre:       document.getElementById('nombre').value.trim(),
        email:        document.getElementById('email').value.trim(),
        telefono:     document.getElementById('telefono') ? document.getElementById('telefono').value.trim() : '',
        area:         document.getElementById('area').value,
        mensaje:      document.getElementById('mensaje') ? document.getElementById('mensaje').value.trim() : '',
        consent_rgpd: true,
        honeypot:     document.getElementById('website').value,
      }),
    });

    var data = await res.json();

    if (data.ok) {
      document.getElementById('formContent').style.display = 'none';
      document.getElementById('formSuccess').style.display = 'block';
    } else {
      throw new Error(data.error || 'Error desconocido');
    }
  } catch (err) {
    btn.disabled = false;
    btn.textContent = 'Enviar consulta';
    var errMsg = document.getElementById('formError');
    if (!errMsg) {
      errMsg = document.createElement('p');
      errMsg.id = 'formError';
      errMsg.style.cssText = 'color:#c9504a;font-size:13px;text-align:center;margin-top:10px;line-height:1.55;';
      btn.parentNode.appendChild(errMsg);
    }
    errMsg.textContent = 'Error al enviar. Por favor, inténtelo de nuevo o llámenos al +34 676594016.';
  }
});
