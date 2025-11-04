
console.log("Cards Motos cargado");

const dataMotos = [
  {
    title: "Yamaha R6",
    url_image: "img/motos/yamaha-r6.jpg",
    desc: "Supersport ágil y ligera, lista para pista.",
    cta: "Ver detalles",
    link: "motos/yamaha-r6.php"
  },
  {
    title: "Honda CBR600RR",
    url_image: "img/motos/honda-cbr600rr.jpg",
    desc: "Equilibrio perfecto entre potencia y manejo.",
    cta: "Ver detalles",
    link: "motos/honda-cbr600rr.php"
  },
  {
    title: "Kawasaki ZX-6R",
    url_image: "img/motos/kawasaki-zx6r.jpg",
    desc: "Motor responsivo y electrónica deportiva.",
    cta: "Ver detalles",
    link: "motos/kawasaki-zx6r.php"
  },
  {
    title: "BMW S1000RR",
    url_image: "img/motos/bmw-s1000rr.jpg",
    desc: "Superbike con tecnologías avanzadas.",
    cta: "Ver detalles",
    link: "motos/bmw-s1000rr.php"
  },
  {
    title: "Ducati Panigale V4",
    url_image: "img/motos/ducati-panigale-v4.jpg",
    desc: "Diseño italiano y rendimiento extremo.",
    cta: "Ver detalles",
    link: "motos/ducati-panigale-v4.php"
  }
];

(function () {
  const CARD = {
    init(){
      const list = document.querySelector('#motos .card-list');
      if(!list){
        console.warn('No se encontró #motos .card-list');
        return;
      }
      list.innerHTML = dataMotos.map((item, i) => this.tplCardItem(item, i)).join('');
    },

    tplCardItem(item, index){
      return `
        <article class="card-item" id="card-number-${index}">
          <img src="${item.url_image}" alt="${item.title}" loading="lazy">
          <div class="card-info">
            <p class="card-title">${item.title}</p>
            <p class="card-desc">${item.desc}</p>
            <a class="card-cta" target="_blank" rel="noopener" href="${item.link}">${item.cta}</a>
          </div>
        </article>
      `;
    }
  };
  CARD.init();
})();
console.log("Cards Mantenimiento cargado");

const dataServicios = [
  {
    title: "Cambio de Aceite",
    url_image: "img/mantenimiento/aceite.jpg",
    desc: "Rápido, limpio y con productos certificados.",
    link: "categorias/Contacto.php"
  },
  {
    title: "Diagnóstico Computarizado",
    url_image: "img/mantenimiento/diagnostico.jpg",
    desc: "Detectamos fallos con equipos de última generación.",
    link: "categorias/Contacto.php"
  },
  {
    title: "Frenos y Suspensión",
    url_image: "img/mantenimiento/frenos.jpg",
    desc: "Inspección y cambio de pastillas/partes críticas.",
    link: "categorias/Contacto.php"
  },
  {
    title: "Alineación y Balanceo",
    url_image: "img/mantenimiento/alineacion.jpg",
    desc: "Mejora el rendimiento y cuida las llantas.",
    link: "categorias/Contacto.php"
  },
  {
    title: "Mantenimiento Preventivo",
    url_image: "img/mantenimiento/preventivo.jpg",
    desc: "Checklist completo y cambio de filtros.",
    link: "categorias/Contacto.php"
  },
  {
    title: "Limpieza de Motor",
    url_image: "img/mantenimiento/limpieza-motor.jpg",
    desc: "Presentación impecable y mejor enfriamiento.",
    link: "categorias/Contacto.php"
  }
];

(function(){
  const list = document.querySelector('#mantenimiento .card-list');
  if(!list){
    console.warn('No se encontró #mantenimiento .card-list');
    return;
  }
  list.innerHTML = dataServicios.map((item, i) => `
    <article class="card-item" id="serv-${i}">
      <img src="${item.url_image}" alt="${item.title}" loading="lazy">
      <div class="card-info">
        <p class="card-title">${item.title}</p>
        <p class="card-desc">${item.desc}</p>
        <a class="btn btn-outline" href="${item.link}">Solicitar</a>
      </div>
    </article>
  `).join('');
})();
