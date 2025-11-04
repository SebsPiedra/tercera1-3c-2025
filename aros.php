<?php require_once "./vistas/vista_superior.php" ?>

<section class="hero-aros">
  <div class="hero-overlay">
    <h1>Aros y Rines</h1>
    <p>Variedad en estilos, tamaños y materiales para todo tipo de vehículo.</p>
  </div>
</section>

<section class="aros-filtros">
  <h2>Categorías de Aros</h2>
  <div class="filter-container">
    <button data-filter="todos" class="filter-btn active">Todos</button>
    <button data-filter="deportivos" class="filter-btn">Deportivos</button>
    <button data-filter="cromados" class="filter-btn">Cromados</button>
    <button data-filter="offroad" class="filter-btn">Off-Road</button>
  </div>
</section>

<section class="aros-galeria">
  <div class="aros-grid">
    <div class="aro-card" data-category="deportivos">
      <img src="img/aros/deportivo1.jpg" alt="Aro Deportivo 17 pulgadas">
      <p>Aro Deportivo 17"</p>
    </div>
    <div class="aro-card" data-category="deportivos">
      <img src="img/aros/deportivo2.jpg" alt="Aro Deportivo 18 pulgadas">
      <p>Aro Deportivo 18"</p>
    </div>
    <div class="aro-card" data-category="cromados">
      <img src="img/aros/cromado1.jpg" alt="Aro Cromado 16 pulgadas">
      <p>Aro Cromado 16"</p>
    </div>
    <div class="aro-card" data-category="cromados">
      <img src="img/aros/cromado2.jpg" alt="Aro Cromado 17 pulgadas">
      <p>Aro Cromado 17"</p>
    </div>
    <div class="aro-card" data-category="offroad">
      <img src="img/aros/offroad1.jpg" alt="Aro Off-Road 18 pulgadas">
      <p>Aro Off-Road 18"</p>
    </div>
    <div class="aro-card" data-category="offroad">
      <img src="img/aros/offroad2.jpg" alt="Aro Off-Road 20 pulgadas">
      <p>Aro Off-Road 20"</p>
    </div>
  </div>
</section>

<section class="aros-tabla">
  <h2>Comparativa de Modelos</h2>
  <table class="tabla-aros">
    <thead>
      <tr>
        <th>Modelo</th>
        <th>Material</th>
        <th>Tamaño</th>
        <th>Color</th>
        <th>Compatibilidad</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Aro ZR17</td>
        <td>Aleación ligera</td>
        <td>17"</td>
        <td>Negro mate</td>
        <td>Toyota / Honda</td>
      </tr>
      <tr>
        <td>Aro LX16</td>
        <td>Acero cromado</td>
        <td>16"</td>
        <td>Plata brillante</td>
        <td>Nissan / Hyundai</td>
      </tr>
      <tr>
        <td>Aro Off-Road XT20</td>
        <td>Aleación reforzada</td>
        <td>20"</td>
        <td>Grafito</td>
        <td>4x4 / SUV</td>
      </tr>
    </tbody>
  </table>
</section>

<section class="accordion-section">
  <h2>Preguntas Frecuentes</h2>
  <div class="accordion" id="accordion-aros" data-single="true">

    <article class="accordion-item">
      <h3 class="accordion-header">
        <button class="accordion-trigger" id="faq1" aria-controls="faq1-panel" aria-expanded="false">
          ¿Cómo elegir el tamaño correcto de aro para mi vehículo?
        </button>
      </h3>
      <div id="faq1-panel" class="accordion-panel" role="region" aria-labelledby="faq1" hidden>
        <div class="accordion-content">
          <p>El tamaño del aro depende de las especificaciones del fabricante del vehículo, las cuales se encuentran en la etiqueta del marco de la puerta o en el manual.  
          También puedes revisar el costado de tus llantas: allí verás un número como <strong>205/55 R16</strong>, donde <strong>R16</strong> indica que el aro es de 16 pulgadas.</p>
          <p>Si deseas mejorar el estilo o el rendimiento, puedes aumentar una o dos pulgadas, pero siempre asegurando que las llantas sean compatibles con el nuevo diámetro.</p>
        </div>
      </div>
    </article>

    <article class="accordion-item">
      <h3 class="accordion-header">
        <button class="accordion-trigger" id="faq2" aria-controls="faq2-panel" aria-expanded="false">
          ¿Cuál es la diferencia entre aros de acero y aros de aleación?
        </button>
      </h3>
      <div id="faq2-panel" class="accordion-panel" role="region" aria-labelledby="faq2" hidden>
        <div class="accordion-content">
          <p><strong>Aros de acero:</strong> Son más económicos y resistentes a impactos, ideales para uso rudo o caminos irregulares. Sin embargo, son más pesados y pueden afectar el consumo de combustible.</p>
          <p><strong>Aros de aleación (aluminio o magnesio):</strong> Son más ligeros, ofrecen mejor desempeño en carretera y un aspecto más elegante.  
          Se recomiendan para autos de calle y deportivos, aunque requieren más cuidado frente a golpes fuertes.</p>
        </div>
      </div>
    </article>

    <article class="accordion-item">
      <h3 class="accordion-header">
        <button class="accordion-trigger" id="faq3" aria-controls="faq3-panel" aria-expanded="false">
          ¿Puedo cambiar el tamaño de aro sin afectar el rendimiento?
        </button>
      </h3>
      <div id="faq3-panel" class="accordion-panel" role="region" aria-labelledby="faq3" hidden>
        <div class="accordion-content">
          <p>Sí, pero con precaución. Aumentar el tamaño del aro cambia el perfil de la llanta.  
          Si pasas, por ejemplo, de 15" a 17", necesitarás llantas de menor perfil para mantener el mismo diámetro total.</p>
          <p>Si se hace incorrectamente, puede afectar la velocidad del velocímetro, el confort de manejo o incluso la suspensión.  
          Lo ideal es consultar con un técnico o con nuestro equipo antes de hacer el cambio.</p>
        </div>
      </div>
    </article>

    <article class="accordion-item">
      <h3 class="accordion-header">
        <button class="accordion-trigger" id="faq4" aria-controls="faq4-panel" aria-expanded="false">
          ¿Ofrecen aros nuevos y usados?
        </button>
      </h3>
      <div id="faq4-panel" class="accordion-panel" role="region" aria-labelledby="faq4" hidden>
        <div class="accordion-content">
          <p>Sí, contamos con aros <strong>nuevos</strong>, <strong>seminuevos</strong> y <strong>reacondicionados</strong>, todos revisados cuidadosamente para garantizar su balance, alineación y ausencia de grietas.</p>
          <p>Los aros usados son una excelente opción para quienes buscan calidad a buen precio, especialmente en modelos difíciles de conseguir.</p>
        </div>
      </div>
    </article>

    <article class="accordion-item">
      <h3 class="accordion-header">
        <button class="accordion-trigger" id="faq5" aria-controls="faq5-panel" aria-expanded="false">
          ¿Qué mantenimiento requieren los aros?
        </button>
      </h3>
      <div id="faq5-panel" class="accordion-panel" role="region" aria-labelledby="faq5" hidden>
        <div class="accordion-content">
          <p>Se recomienda lavar los aros al menos una vez por semana con agua y jabón neutro para evitar acumulación de polvo, grasa o residuos de frenos.</p>
          <p>No uses productos abrasivos ni limpiadores ácidos, especialmente en aros cromados o pintados, ya que pueden dañar el acabado.</p>
          <p>También se aconseja revisar el balanceo y alineación cada 6 meses o después de un impacto fuerte.</p>
        </div>
      </div>
    </article>

  </div>
</section>

<script src="script/accordion.js" defer></script>
<script src="script/filtros-aros.js" defer></script>
