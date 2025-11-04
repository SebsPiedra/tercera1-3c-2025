<?php require_once "./vistas/vista_superior.php" ?>

<section class="hero-nosotros">
  <div class="hero-overlay">
    <h1>Sobre NitroParts</h1>
    <p>Repuestos y accesorios con garantía, asesoría experta y servicio de confianza.</p>
  </div>
</section>

<section class="about-wrap">
  <div class="about-text">
    <h2>¿Quiénes somos?</h2>
    <p>
      En <strong>NitroParts</strong> ayudamos a que tu vehículo rinda al máximo.
      Seleccionamos repuestos confiables, validamos compatibilidad por VIN y
      ofrecemos soporte técnico para que compres con seguridad.
    </p>
    <p>
      Trabajamos con marcas reconocidas y procesos claros de garantía y devolución.
      Nuestro objetivo: <em>calidad, rapidez y trato honesto</em>.
    </p>
  </div>

  <div class="about-cards">
    <article class="mini-card">
      <h3>Misión</h3>
      <p>Proveer repuestos y accesorios confiables con asesoría profesional.</p>
    </article>
    <article class="mini-card">
      <h3>Visión</h3>
      <p>Ser la primera opción de confianza en repuestos y mantenimiento.</p>
    </article>
    <article class="mini-card">
      <h3>Valores</h3>
      <p>Calidad, transparencia, rapidez y servicio al cliente.</p>
    </article>
  </div>
</section>

<section class="stats">
  <div class="stat">
    <span class="num">+8</span>
    <span class="label">Años de experiencia</span>
  </div>
  <div class="stat">
    <span class="num">+3K</span>
    <span class="label">Clientes satisfechos</span>
  </div>
  <div class="stat">
    <span class="num">+5K</span>
    <span class="label">Repuestos en stock</span>
  </div>
  <div class="stat">
    <span class="num">100%</span>
    <span class="label">Compatibilidad verificada</span>
  </div>
</section>

<section class="brands">
  <h2>Marcas con las que trabajamos</h2>
  <div class="brand-grid">
    <img src="img/marcas/toyota.jpg" alt="Toyota">
    <img src="img/marcas/nissan.jpg" alt="Nissan">
    <img src="img/marcas/honda.jpg" alt="Honda">
    <img src="img/marcas/hyundai.jpg" alt="Hyundai">
    <img src="img/marcas/kia.jpg" alt="Kia">
    <img src="img/marcas/chevrolet.jpg" alt="Chevrolet">
  </div>
</section>

<section class="timeline">
  <h2>Nuestra historia</h2>
  <ol class="timeline-list">
    <li>
      <span class="dot"></span>
      <div>
        <h3>2017</h3>
        <p>Abrimos nuestras puertas con enfoque en repuestos de motor.</p>
      </div>
    </li>
    <li>
      <span class="dot"></span>
      <div>
        <h3>2020</h3>
        <p>Integramos diagnóstico y verificación de compatibilidad por VIN.</p>
      </div>
    </li>
    <li>
      <span class="dot"></span>
      <div>
        <h3>2023</h3>
        <p>Ampliamos catálogo a aros, accesorios y mantenimiento preventivo.</p>
      </div>
    </li>
  </ol>
</section>

<section class="team">
  <h2>Equipo</h2>
  <div class="team-grid">
    <article class="person">
      <img src="img/team/person1.jpg" alt="Karla – Atención y Ventas">
      <h3>Karla</h3>
      <p>Atención y Ventas</p>
    </article>
    <article class="person">
      <img src="img/team/person2.jpg" alt="Pablo – Técnico Mecánico">
      <h3>Pablo</h3>
      <p>Técnico Mecánico</p>
    </article>
    <article class="person">
      <img src="img/team/person3.jpg" alt="Sofía – Garantías y Calidad">
      <h3>Sofía</h3>
      <p>Garantías y Calidad</p>
    </article>
  </div>
</section>

<section class="policies">
  <h2>Garantías y políticas</h2>
  <ul>
    <li>Compatibilidad verificada por VIN / código de motor.</li>
    <li>Cambios y devoluciones bajo condiciones de fabricante.</li>
    <li>Asesoría técnica antes y después de la compra.</li>
  </ul>
</section>

<section class="contacto-local">
  <div class="info">
    <h2>Visítanos</h2>
    <p><strong>Horario:</strong> L–V 8:00–6:00 • Sáb 8:00–1:00</p>
    <p><strong>WhatsApp:</strong> +506 8520-5023</p>
    <p><strong>Correo:</strong> contacto@nitroparts.cr</p>
    <p><strong>Dirección:</strong> San José, Costa Rica</p>
  </div>
  <div class="map">
    <iframe
      src="https://www.google.com/maps/embed?pb="
      loading="lazy" referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</section>

<section class="accordion-section">
  <h2>Preguntas frecuentes</h2>
  <div class="accordion" id="accordion-nosotros" data-single="true">
    <article class="accordion-item">
      <h3 class="accordion-header">
        <button class="accordion-trigger" id="n-faq1" aria-controls="n-faq1-p" aria-expanded="false">
          ¿Cómo verifican la compatibilidad del repuesto?
        </button>
      </h3>
      <div id="n-faq1-p" class="accordion-panel" role="region" aria-labelledby="n-faq1" hidden>
        <div class="accordion-content">
          <p>Validamos por VIN, código de motor, año/versión y, si es necesario, cotejamos fotos del repuesto original.</p>
        </div>
      </div>
    </article>
    <article class="accordion-item">
      <h3 class="accordion-header">
        <button class="accordion-trigger" id="n-faq2" aria-controls="n-faq2-p" aria-expanded="false">
          ¿Ofrecen instalación o solo venta?
        </button>
      </h3>
      <div id="n-faq2-p" class="accordion-panel" role="region" aria-labelledby="n-faq2" hidden>
        <div class="accordion-content">
          <p>Vendemos e instalamos accesorios y algunos repuestos. Si se requiere, te referimos a talleres aliados.</p>
        </div>
      </div>
    </article>
    <article class="accordion-item">
      <h3 class="accordion-header">
        <button class="accordion-trigger" id="n-faq3" aria-controls="n-faq3-p" aria-expanded="false">
          ¿Qué métodos de pago aceptan?
        </button>
      </h3>
      <div id="n-faq3-p" class="accordion-panel" role="region" aria-labelledby="n-faq3" hidden>
        <div class="accordion-content">
          <p>Efectivo, SINPE Móvil, tarjetas y transferencias. Consultar financiamiento en tienda.</p>
        </div>
      </div>
    </article>
  </div>
</section>

<script src="script/accordion.js" defer></script>


