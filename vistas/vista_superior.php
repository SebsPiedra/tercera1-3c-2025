
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>NitroParts</title>

 <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <header class="site-header">
  <div class="menu-izquierda">
    <a href="./">
      <img src="/img/NitroParts.jpg" alt="NitroParts" height="60" class="logo">
    </a>
  </div>

  <button class="hamburger-icon" aria-label="Abrir menú" aria-controls="menu-principal" aria-expanded="false">
    <span></span><span></span><span></span>
  </button>

  <nav class="menu-derecha">
    <div id="menu-principal" class="menu-container">
      <div class="menu-normal">
        <a href="Inicio.php">Inicio</a>
        <a href="Nosotros.php">Nosotros</a>
        <a href="Repuestos.php">Repuestos</a>
        <a href="Accesorios.php">Accesorios</a>
        <a href="Motos.php">Motos</a>
        <a href="Contacto.php">Contacto</a>
      </div>
    </div>
  </nav>
</header>

  <script>
    console.log('cargando hamburger icon...');

    (function (){
      const MAIN_OBJ = {
        init: function(){
          this.eventhandlers();
        },
        eventhandlers: function(){
          const btn  = document.querySelector('.hamburger-icon');
          const menu = document.querySelector('.menu-container');
          if(!btn || !menu) return;

          btn.addEventListener('click', function(){
            const isOpen = menu.classList.toggle('menu-open');
            btn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
          });

       
          document.addEventListener('click', (e)=>{
            if(!menu.contains(e.target) && !btn.contains(e.target)){
              if(menu.classList.contains('menu-open')){
                menu.classList.remove('menu-open');
                btn.setAttribute('aria-expanded','false');
              }
            }
          });
        }
      };
      if(document.readyState === 'loading'){
        document.addEventListener('DOMContentLoaded', ()=> MAIN_OBJ.init());
      } else {
        MAIN_OBJ.init();
      }
    })();
  </script>
</body>
</html>




 