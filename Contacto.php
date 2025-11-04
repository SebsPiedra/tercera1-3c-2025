<?php require_once "./vistas/vista_superior.php" ?>

<section class="hero-contacto">
  <div class="hero-overlay">
    <h1>Contacto</h1>
    <p>¿Dudas o cotizaciones? Escríbenos y con gusto te ayudamos.</p>
  </div>
</section>

<section class="contacto-grid">
  <div class="contacto-info">
    <h2>Datos de contacto</h2>
    <ul class="contacto-list">
      <li><strong>WhatsApp:</strong> <a href="https://wa.me/50685205023" target="_blank" rel="noopener">+506 8520-5023</a></li>
      <li><strong>Teléfono:</strong> <a href="tel:+50622223333">+506 2222-3333</a></li>
      <li><strong>Correo:</strong> <a href="mailto:contacto@nitroparts.cr">contacto@nitroparts.cr</a></li>
      <li><strong>Horario:</strong> L–V 8:00–18:00 · Sáb 8:00–13:00</li>
      <li><strong>Dirección:</strong> San José, Costa Rica</li>
    </ul>

    <div class="contacto-cta">
      <a class="btn-wsp" href="https://wa.me/50685205023" target="_blank" rel="noopener">Escribir por WhatsApp</a>
    </div>

    <h3>Preguntas rápidas</h3>
    <div class="accordion" id="accordion-contacto" data-single="true">
      <article class="accordion-item">
        <h4 class="accordion-header">
          <button class="accordion-trigger" id="c-faq1" aria-controls="c-faq1-p" aria-expanded="false">
            ¿Cuánto tardan en responder?
          </button>
        </h4>
        <div id="c-faq1-p" class="accordion-panel" role="region" aria-labelledby="c-faq1" hidden>
          <div class="accordion-content">
            <p>En horario laboral respondemos en minutos por WhatsApp y el mismo día por correo.</p>
          </div>
        </div>
      </article>

      <article class="accordion-item">
        <h4 class="accordion-header">
          <button class="accordion-trigger" id="c-faq2" aria-controls="c-faq2-p" aria-expanded="false">
            ¿Realizan envíos?
          </button>
        </h4>
        <div id="c-faq2-p" class="accordion-panel" role="region" aria-labelledby="c-faq2" hidden>
          <div class="accordion-content">
            <p>Sí, enviamos a todo Costa Rica. Cotizamos según peso/volumen y ubicación.</p>
          </div>
        </div>
      </article>
    </div>
  </div>

  <div class="contacto-form">
    <h2>Escríbenos</h2>
    <form id="form-contacto" method="post" action="procesar_contacto.php" novalidate>
 
      <input type="text" name="website" class="hp" tabindex="-1" autocomplete="off">
      <div class="field">
        <label for="nombre">Nombre</label>
        <input id="nombre" name="nombre" type="text" required placeholder="Tu nombre">
      </div>
      <div class="field">
        <label for="correo">Correo</label>
        <input id="correo" name="correo" type="email" required placeholder="tucorreo@ejemplo.com">
      </div>
      <div class="field">
        <label for="telefono">Teléfono (opcional)</label>
        <input id="telefono" name="telefono" type="tel" placeholder="+506 ...">
      </div>
      <div class="field">
        <label for="mensaje">Mensaje</label>
        <textarea id="mensaje" name="mensaje" rows="5" required placeholder="Cuéntanos qué repuesto o servicio necesitas"></textarea>
      </div>
      <button class="btn-enviar" type="submit">Enviar</button>
      <p id="form-msg" class="form-msg" aria-live="polite"></p>
    </form>
  </div>


  <div class="contacto-map">
    <iframe
      src="https://www.google.com/maps/embed?pb="
      loading="lazy" referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</section>

<script src="script/accordion.js" defer></script>
<script src="script/contacto-validate.js" defer></script>
