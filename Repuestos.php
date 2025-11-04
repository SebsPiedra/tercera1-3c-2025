<?php require_once "./vistas/vista_superior.php" ?>

<section class="hero-repuestos">
  <div class="hero-overlay">
    <h1>Repuestos Automotrices</h1>
    <p>Encuentra las piezas esenciales para mantener tu vehículo en excelente estado.</p>
  </div>
</section>

<section class="repuestos-filtros">
  <h2>Categorías</h2>
  <div class="filter-container">
    <button class="filter-btn active" data-filter="todos">Todos</button>
    <button class="filter-btn" data-filter="motor">Motor</button>
    <button class="filter-btn" data-filter="frenos">Frenos</button>
    <button class="filter-btn" data-filter="suspension">Suspensión</button>
  </div>
</section>


<section class="repuestos-grid">
  <div class="repuesto-card" data-category="motor">
    <img src="img/repuestos/filtro-aceite.jpg" alt="Filtro de Aceite">
    <h3>Filtro de Aceite</h3>
    <p>Filtra impurezas del motor y mejora la lubricación interna.</p>
  </div>
  <div class="repuesto-card" data-category="motor">
    <img src="img/repuestos/filtro-aire.jpg" alt="Filtro de Aire">
    <h3>Filtro de Aire</h3>
    <p>Evita que el polvo y suciedad ingresen al sistema de combustión.</p>
  </div>
  <div class="repuesto-card" data-category="frenos">
    <img src="img/repuestos/pastillas-freno.jpg" alt="Pastillas de Freno">
    <h3>Pastillas de Freno</h3>
    <p>Aseguran una frenada suave y segura en todo momento.</p>
  </div>
  <div class="repuesto-card" data-category="motor">
    <img src="img/repuestos/bujias.jpg" alt="Bujías">
    <h3>Bujías</h3>
    <p>Generan la chispa que enciende la mezcla aire-combustible.</p>
  </div>
  <div class="repuesto-card" data-category="suspension">
    <img src="img/repuestos/amortiguador.jpg" alt="Amortiguadores">
    <h3>Amortiguadores</h3>
    <p>Brindan estabilidad y confort en el manejo.</p>
  </div>
  <div class="repuesto-card" data-category="motor">
    <img src="img/repuestos/correa-distribucion.jpg" alt="Correa de Distribución">
    <h3>Correa de Distribución</h3>
    <p>Sincroniza el movimiento del motor y evita fallos graves.</p>
  </div>
</section>

<section class="accordion-section">
  <h2>Consejos de Mantenimiento</h2>
  <div class="accordion" id="accordion-repuestos" data-single="true">

    <article class="accordion-item">
      <h3 class="accordion-header">
        <button class="accordion-trigger" id="tip1" aria-controls="tip1-panel" aria-expanded="false">
          ¿Cada cuánto debo cambiar el filtro de aceite?
        </button>
      </h3>
      <div id="tip1-panel" class="accordion-panel" role="region" aria-labelledby="tip1" hidden>
        <div class="accordion-content">
          <p>Se recomienda cambiarlo cada <strong>5.000 a 10.000 km</strong> o según indique el fabricante.  
          Un filtro en mal estado puede reducir la vida útil del motor.</p>
        </div>
      </div>
    </article>

    <article class="accordion-item">
      <h3 class="accordion-header">
        <button class="accordion-trigger" id="tip2" aria-controls="tip2-panel" aria-expanded="false">
          ¿Qué señales indican que debo cambiar las pastillas de freno?
        </button>
      </h3>
      <div id="tip2-panel" class="accordion-panel" role="region" aria-labelledby="tip2" hidden>
        <div class="accordion-content">
          <p>Si escuchas chirridos al frenar, notas vibraciones o el pedal se hunde demasiado,  
          es probable que necesites cambiar las pastillas de freno. Verifica cada 15.000 km.</p>
        </div>
      </div>
    </article>

    <article class="accordion-item">
      <h3 class="accordion-header">
        <button class="accordion-trigger" id="tip3" aria-controls="tip3-panel" aria-expanded="false">
          ¿Qué pasa si no cambio la correa de distribución a tiempo?
        </button>
      </h3>
      <div id="tip3-panel" class="accordion-panel" role="region" aria-labelledby="tip3" hidden>
        <div class="accordion-content">
          <p>Una correa vieja puede romperse y causar graves daños al motor.  
          Se recomienda cambiarla cada <strong>80.000 a 100.000 km</strong> o según el fabricante.</p>
        </div>
      </div>
    </article>

  </div>
</section>

<script src="script/accordion.js" defer></script>
<script src="script/filtros-repuestos.js" defer></script>
