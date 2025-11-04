console.log("accordion.js cargado");

(function(){
  function setHeight(panel, open){
    
    if(open){
      panel.hidden = false;                
      const content = panel.firstElementChild;
      const target = content ? content.scrollHeight : 0;
      panel.style.height = "0px";
      requestAnimationFrame(() => {
        panel.style.height = target + "px";
      });
      
      panel.addEventListener('transitionend', function onEnd(){
        panel.style.height = "auto";
        panel.removeEventListener('transitionend', onEnd);
      });
    } else {
      const current = panel.scrollHeight;
      panel.style.height = current + "px";
      requestAnimationFrame(() => {
        panel.style.height = "0px";
      });
      panel.addEventListener('transitionend', function onEnd(){
        panel.hidden = true;
        panel.removeEventListener('transitionend', onEnd);
      });
    }
  }

  function closeItem(trigger, panel){
    trigger.setAttribute('aria-expanded', 'false');
    setHeight(panel, false);
  }

  function openItem(trigger, panel, accordionEl){
    const single = accordionEl?.dataset?.single === "true";
    if(single){
      accordionEl.querySelectorAll('.accordion-trigger[aria-expanded="true"]').forEach(btn=>{
        if(btn !== trigger){
          const other = document.getElementById(btn.getAttribute('aria-controls'));
          if(other) closeItem(btn, other);
        }
      });
    }
    trigger.setAttribute('aria-expanded', 'true');
    setHeight(panel, true);
  }

  function onClick(e){
    const btn = e.currentTarget;
    const panelId = btn.getAttribute('aria-controls');
    const panel = document.getElementById(panelId);
    if(!panel) return;
    const accordionEl = btn.closest('.accordion');
    const expanded = btn.getAttribute('aria-expanded') === 'true';
    expanded ? closeItem(btn, panel) : openItem(btn, panel, accordionEl);
  }

  function initAccordion(root=document){
    const triggers = root.querySelectorAll('.accordion-trigger');
    triggers.forEach(btn=>{
      const panelId = btn.getAttribute('aria-controls');
      const panel = document.getElementById(panelId);
      if(!panel) return;

      const expanded = btn.getAttribute('aria-expanded') === 'true';
      if(expanded){
        panel.hidden = false;
        panel.style.height = "auto";
      } else {
        panel.hidden = true;
        panel.style.height = "0px";
      }

      btn.addEventListener('click', onClick);
    });
  }

  if(document.readyState === 'loading'){
    document.addEventListener('DOMContentLoaded', () => initAccordion());
  } else {
    initAccordion();
  }
})();
