console.log("filtros-repuestos.js cargado");

document.querySelectorAll('.filter-btn').forEach(btn=>{
  btn.addEventListener('click', ()=>{
    const filtro = btn.dataset.filter;
    document.querySelectorAll('.filter-btn').forEach(b=>b.classList.remove('active'));
    btn.classList.add('active');

    document.querySelectorAll('.repuesto-card').forEach(card=>{
      const categoria = card.dataset.category;
      card.style.display = (filtro === 'todos' || categoria === filtro) ? 'block' : 'none';
    });
  });
});
