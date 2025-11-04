
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Tercera 1</title>
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
 <div class="carousel" aria-label="Categorías NitroParts">
  <div class="track" id="track">
    <div class="group">
      <div class="card">
        <a class="card-link" href="Accesorios.php">
          <img src="/img/accesorios.jpg" alt="Accesorios" class="imagen-card">
          <span class="card-title">Accesorios</span>
        </a>
      </div>
      <div class="card">
        <a class="card-link" href="Repuestos.php">
          <img src="/img/Rep.jpg" alt="Repuestos" class="imagen-card">
          <span class="card-title">Repuestos</span>
        </a>
      </div>
      <div class="card">
        <a class="card-link" href="Mantenimiento.php">
          <img src="/img/mantenimiento.jpg" alt="Mantenimiento" class="imagen-card">
          <span class="card-title">Mantenimiento</span>
        </a>
      </div>
      <div class="card">
        <a class="card-link" href="motores.php">
          <img src="/img/motores.jpg" alt="motores" class="imagen-card">
          <span class="card-title">Motores</span>
        </a>
      </div>
      <div class="card">
        <a class="card-link" href="Motos.php">
          <img src="/img/motos.jpg" alt="Motos" class="imagen-card">
          <span class="card-title">Motos</span>
        </a>
      </div>
      <div class="card">
        <a class="card-link" href="aros.php">
          <img src="/img/arosLlantas.jpg" alt="Aros y Llantas" class="imagen-card">
          <span class="card-title">Aros y Llantas</span>
        </a>
      </div>
    </div>
    <div class="group" aria-hidden="true"></div>
  </div>
</div>
</div>
<script>
  (function(){
    const track = document.getElementById('track');
    const firstGroup = track.querySelector('.group');
    const clone = firstGroup.cloneNode(true);
    clone.setAttribute('aria-hidden', 'true');
    track.appendChild(clone);
    })();
</script>
</body>
</html>


<script src="./script/hamburger.icon.js" defer></script>
<script src="./script/cards.js" defer></script>
<script src="./script/accordion.js" defer></script>
