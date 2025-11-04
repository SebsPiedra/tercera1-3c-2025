<?php require_once "./vistas/vista_superior.php" ?>

<section class="hero-accesorios">
  <div class="hero-overlay">
    <h1>Accesorios</h1>
    <p>Personaliza tu vehículo con estilo, seguridad y tecnología.</p>
  </div>
</section>

<section class="accesorios-filtros">
  <h2>Explora por categoría</h2>
  <div class="filter-bar">
    <div class="chips">
      <button class="chip active" data-filter="todos">Todos</button>
      <button class="chip" data-filter="interior">Interior</button>
      <button class="chip" data-filter="exterior">Exterior</button>
      <button class="chip" data-filter="electricos">Eléctricos</button>
      <button class="chip" data-filter="seguridad">Seguridad</button>
      <button class="chip" data-filter="tecnologia">Tecnología</button>
    </div>

    <div class="search-wrap">
      <input id="acc-search" type="search" placeholder="Buscar accesorio… (ej. cámara, alfombra)" autocomplete="off">
    </div>
  </div>
</section>

<section class="accesorios-grid">
  <div class="accesorio-card" data-category="interior" data-name="alfombras goma">
    <div class="badge">Interior</div>
    <img src="img/accesorios/alfombras-goma.jpg" alt="Alfombras de goma">
    <h3>Alfombras de goma</h3>
    <p>Protección completa contra barro y líquidos, fáciles de lavar.</p>
  </div>

  <div class="accesorio-card" data-category="tecnologia" data-name="camara reversa">
    <div class="badge">Tecnología</div>
    <img src="img/accesorios/camara-reversa.jpg" alt="Cámara de reversa HD">
    <h3>Cámara de reversa HD</h3>
    <p>Mejora tu visibilidad al estacionar, visión nocturna incluida.</p>
  </div>

  <div class="accesorio-card" data-category="electricos" data-name="cargador usb rapido">
    <div class="badge">Eléctricos</div>
    <img src="img/accesorios/cargador-usb.jpg" alt="Cargador USB rápido">
    <h3>Cargador USB rápido</h3>
    <p>Carga rápida para múltiples dispositivos, 3.1A dual-port.</p>
  </div>

  <div class="accesorio-card" data-category="seguridad" data-name="bloqueador volante">
    <div class="badge">Seguridad</div>
    <img src="img/accesorios/bloqueador-volante.jpg" alt="Bloqueador de volante">
    <h3>Bloqueador de volante</h3>
    <p>Disuasivo físico, construcción en acero, llave de seguridad.</p>
  </div>

  <div class="accesorio-card" data-category="exterior" data-name="cubre llantas guardafangos">
    <div class="badge">Exterior</div>
    <img src="img/accesorios/guardafangos.jpg" alt="Guardafangos / cubre llantas">
    <h3>Guardafangos</h3>
    <p>Reduce salpicaduras y protege la pintura en caminos húmedos.</p>
  </div>

  <div class="accesorio-card" data-category="interior" data-name="organizador asiento">
    <div class="badge">Interior</div>
    <img src="img/accesorios/organizador-asiento.jpg" alt="Organizador de asiento">
    <h3>Organizador de asiento</h3>
    <p>Guarda cables, botellas y objetos; mantiene todo a mano.</p>
  </div>

  <div class="accesorio-card" data-category="tecnologia" data-name="soporte celular magnetico">
    <div class="badge">Tecnología</div>
    <img src="img/accesorios/soporte-celular.jpg" alt="Soporte de celular magnético">
    <h3>Soporte para celular</h3>
    <p>Fijación magnética estable; compatible con la mayoría de teléfonos.</p>
  </div>

  <div class="accesorio-card" data-category="seguridad" data-name="kit emergencia">
    <div class="badge">Seguridad</div>
    <img src="img/accesorios/kit-emergencia.jpg" alt="Kit de emergencia">
    <h3>Kit de emergencia</h3>
    <p>Triángulos, chaleco, cables y botiquín básico para imprevistos.</p>
  </div>
</section>

<section class="accordion-section">
  <h2>Preguntas frecuentes</h2>
  <div class="accordion" id="accordion-accesorios" data-single="true">
    <article class="accordion-item">
      <h3 class="accordion-header">
        <button class="accordion-trigger" id="acc-faq1" aria-controls="acc-faq1-panel" aria-expanded="false">
          ¿Los accesorios son universales o requieren modelo específico?
        </button>
      </h3>
      <div id="acc-faq1-panel" class="accordion-panel" role="region" aria-labelledby="acc-faq1" hidden>
        <div class="accordion-content">
          <p>Depende del producto. Muchos accesorios son universales (cargadores, soportes, cámaras) y otros requieren medidas o anclajes específicos (alfombras a medida, guardafangos, bloqueadores). Te ayudamos a verificar compatibilidad.</p>
        </div>
      </div>
    </article>

    <article class="accordion-item">
      <h3 class="accordion-header">
        <button class="accordion-trigger" id="acc-faq2" aria-controls="acc-faq2-panel" aria-expanded="false">
          ¿Instalan accesorios eléctricos y de seguridad?
        </button>
      </h3>
      <div id="acc-faq2-panel" class="accordion-panel" role="region" aria-labelledby="acc-faq2" hidden>
        <div class="accordion-content">
          <p>Sí. Contamos con instalación para cámaras, cargadores, sensores y accesorios que requieran conexión eléctrica, además de bloqueadores y kits de seguridad.</p>
        </div>
      </div>
    </article>

    <article class="accordion-item">
      <h3 class="accordion-header">
        <button class="accordion-trigger" id="acc-faq3" aria-controls="acc-faq3-panel" aria-expanded="false">
          ¿Qué garantía ofrecen?
        </button>
      </h3>
      <div id="acc-faq3-panel" class="accordion-panel" role="region" aria-labelledby="acc-faq3" hidden>
        <div class="accordion-content">
          <p>Garantía por defecto de fabricación. En accesorios eléctricos, adicionalmente te orientamos sobre voltajes y fusibles adecuados para evitar daños por instalación incorrecta.</p>
        </div>
      </div>
    </article>
  </div>
</section>

<script src="script/accordion.js" defer></script>
<script src="script/filtros-accesorios.js" defer></script>
