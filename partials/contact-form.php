<div class="contact-form">
  <div class="form-title">Solicitar consulta gratuita</div>
  <div id="formContent">
    <div class="form-row">
      <div class="form-group">
        <label class="form-label" for="nombre">Nombre</label>
        <input class="form-input" id="nombre" type="text" placeholder="Su nombre" required>
      </div>
      <div class="form-group">
        <label class="form-label" for="email">Correo electrónico</label>
        <input class="form-input" id="email" type="email" placeholder="correo@ejemplo.com" required>
      </div>
    </div>
    <div class="form-group">
      <label class="form-label" for="telefono">Teléfono</label>
      <input class="form-input" id="telefono" type="tel" placeholder="+34 612 345 678">
    </div>
    <div class="form-group">
      <label class="form-label" for="area">Área de consulta</label>
      <select class="form-input" id="area" required>
        <option value="">Seleccione un área</option>
        <optgroup label="Servicios jurídicos">
          <option value="general">Asesoría legal general</option>
          <option value="laboral">Derecho laboral</option>
          <option value="civil">Derecho civil</option>
          <option value="mercantil">Derecho mercantil</option>
          <option value="penal">Derecho penal</option>
          <option value="extranjeria">Derecho de extranjería</option>
        </optgroup>
        <optgroup label="Asesoramiento tecnológico">
          <option value="rgpd">Protección de datos / RGPD</option>
          <option value="ciberseguridad">Ciberseguridad legal</option>
          <option value="contratos-tech">Contratos tecnológicos</option>
          <option value="startup">Startups y empresas tech</option>
          <option value="legaltech">Legaltech y automatización</option>
        </optgroup>
        <option value="otro">Otro / No sé aún</option>
      </select>
    </div>
    <div class="form-group">
      <label class="form-label" for="mensaje">Mensaje</label>
      <textarea class="form-input" id="mensaje" placeholder="Cuéntenos brevemente su situación o en qué podemos ayudarle…"></textarea>
    </div>
    <input type="text" id="website" name="website" style="display:none" tabindex="-1" autocomplete="off">
    <div class="form-group">
      <label style="display:flex;align-items:flex-start;gap:10px;font-size:13px;color:#4a5a76;cursor:pointer">
        <input type="checkbox" id="consentRgpd" style="margin-top:2px;accent-color:#c98b62">
        <span>Acepto la <a href="privacidad.html" target="_blank" style="color:#c98b62">política de privacidad</a> y consiento el tratamiento de mis datos para gestionar mi consulta.</span>
      </label>
    </div>
    <button class="form-submit" id="formSubmit" type="button">Enviar consulta</button>
  </div>
  <div class="form-success" id="formSuccess">
    <div class="form-success-icon"><i class="ph ph-check-circle"></i></div>
    <h3>¡Consulta recibida!</h3>
    <p>Nos pondremos en contacto en menos de 24 horas. Gracias por confiar en F&amp;P Legaltec.</p>
  </div>
</div>
