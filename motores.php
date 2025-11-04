<?php require_once "./vistas/vista_superior.php" ?>

<section class="hero-motores">
  <div class="hero-overlay">
    <h1>Motores</h1>
    <p>Variedad de motores para Toyota, Nissan y Honda — rendimiento y confiabilidad garantizados.</p>
  </div>
</section>

<section class="accordion-section">
  <h2>Especificaciones y descripción</h2>

 
  <div class="accordion" id="accordion-motores" data-single="true">
   
    <article class="accordion-item">
      <h3 class="accordion-header">
        <button
          class="accordion-trigger"
          id="motor1-header"
          aria-controls="motor1-panel"
          aria-expanded="false"
        >
          Toyota Corolla — Variedad de motores
        </button>
      </h3>
      <div
        id="motor1-panel"
        class="accordion-panel"
        role="region"
        aria-labelledby="motor1-header"
        hidden
      >
        <div class="accordion-content">
          <img src="img/motores/corolla.jpg" alt="Motor Toyota Corolla" class="acc-img">
          <p>
            Disponemos de diferentes opciones para **Toyota Corolla**, según generación y año
            (E140, E170, E210, etc.): motores **1.6L / 1.8L / 2.0L** con tecnología **VVT-i**,
            además de variantes **híbridas**. Cada unidad se revisa para compatibilidad por código
            de motor y ECU.
          </p>
          <ul class="acc-list">
            <li>Gasolina: 1ZR-FE (1.6L), 2ZR-FE/FAE (1.8L), M20A-FKS (2.0L).</li>
            <li>Híbrido: 2ZR-FXE (1.8L) para versiones HEV.</li>
            <li>Opciones: corto/largo armado (short/long block) y con accesorios.</li>
          </ul>
        </div>
      </div>
    </article>

    <article class="accordion-item">
      <h3 class="accordion-header">
        <button
          class="accordion-trigger"
          id="motor2-header"
          aria-controls="motor2-panel"
          aria-expanded="false"
        >
          Nissan Versa — Variedad de motores
        </button>
      </h3>
      <div
        id="motor2-panel"
        class="accordion-panel"
        role="region"
        aria-labelledby="motor2-header"
        hidden
      >
        <div class="accordion-content">
          <img src="img/motores/versa.jpg" alt="Motor Nissan Versa" class="acc-img">
          <p>
            Para **Nissan Versa** contamos con motores **1.6L** (familia **HR16DE**) y variantes
            según año/modelo (incluyendo configuraciones para transmisión manual/automática/CVT).
            Verificamos soportes, sensores y arneses para asegurar instalación sin contratiempos.
          </p>
          <ul class="acc-list">
            <li>Gasolina: HR16DE (1.6L) — compatible con múltiples años.</li>
            <li>Versiones con calibraciones específicas por país/año.</li>
            <li>Opción motor armado o base, con garantía y asesoría técnica.</li>
          </ul>
        </div>
      </div>
    </article>

    <article class="accordion-item">
      <h3 class="accordion-header">
        <button
          class="accordion-trigger"
          id="motor3-header"
          aria-controls="motor3-panel"
          aria-expanded="false"
        >
          Honda Civic — Variedad de motores
        </button>
      </h3>
      <div
        id="motor3-panel"
        class="accordion-panel"
        role="region"
        aria-labelledby="motor3-header"
        hidden
      >
        <div class="accordion-content">
          <img src="img/motores/civic.jpg" alt="Motor Honda Civic" class="acc-img">
          <p>
            Disponibles motores para **Honda Civic** de distintas generaciones: **2.0L i-VTEC**
            (serie **R20**/K20 según año) y **1.5L Turbo** (serie **L15B**). Contamos con opciones
            para sedán y hatchback, con validación de compatibilidad por VIN/código de motor.
          </p>
          <ul class="acc-list">
            <li>Gasolina: 2.0L i-VTEC (R20/K20), 1.5L Turbo (L15B).</li>
            <li>Variedad de sensores/ECU según versión y equipamiento.</li>
            <li>Repuestos y soportes según montaje específico del chasis.</li>
          </ul>
        </div>
      </div>
    </article>
  </div>
</section>


<script src="script/accordion.js" defer></script>
