console.log("filtros-accesorios.js cargado");

(function(){
  const chips = document.querySelectorAll('.chip');
  const cards = document.querySelectorAll('.accesorio-card');
  const search = document.getElementById('acc-search');

  function applyFilters(){
    const activeChip = document.querySelector('.chip.active');
    const cat = activeChip ? activeChip.dataset.filter : 'todos';
    const term = (search?.value || '').trim().toLowerCase();

    cards.forEach(card=>{
      const c = card.dataset.category;
      const name = (card.dataset.name || '').toLowerCase();
      const byCat = (cat === 'todos' || c === cat);
      const byTerm = (!term || name.includes(term));
      card.style.display = (byCat && byTerm) ? 'block' : 'none';
    });
  }

  chips.forEach(chip=>{
    chip.addEventListener('click', ()=>{
      chips.forEach(c=>c.classList.remove('active'));
      chip.classList.add('active');
      applyFilters();
    });
  });

  if(search){
    search.addEventListener('input', applyFilters);
  }


  applyFilters();
})();
