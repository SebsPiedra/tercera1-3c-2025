console.log("contacto-validate.js cargado");

(function(){
  const form = document.getElementById('form-contacto');
  if(!form) return;

  form.addEventListener('submit', (e)=>{
    const msgEl = document.getElementById('form-msg');
    const hp = form.querySelector('input.hp');
    if(hp && hp.value) { 
      e.preventDefault();
      msgEl.textContent = "Error: verificación anti-spam.";
      msgEl.style.color = "#f87171";
      return;
    }

    const nombre = form.nombre.value.trim();
    const correo = form.correo.value.trim();
    const mensaje = form.mensaje.value.trim();

    if(!nombre || !correo || !mensaje){
      e.preventDefault();
      msgEl.textContent = "Por favor completa los campos obligatorios.";
      msgEl.style.color = "#fbbf24";
      return;
    }


    const okMail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(correo);
    if(!okMail){
      e.preventDefault();
      msgEl.textContent = "Ingresa un correo válido.";
      msgEl.style.color = "#fbbf24";
      return;
    }
    
    msgEl.textContent = "Enviando...";
    msgEl.style.color = "#93c5fd";
  });
})();
