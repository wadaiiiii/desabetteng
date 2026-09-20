const toggle=document.querySelector('.nav-toggle');
const nav=document.querySelector('.main-nav');
toggle?.addEventListener('click',()=>{const open=nav.classList.toggle('open');toggle.setAttribute('aria-expanded',String(open));});
document.querySelectorAll('.nav-item>button').forEach(btn=>btn.addEventListener('click',()=>btn.parentElement.classList.toggle('open')));
document.querySelectorAll('.main-nav a').forEach(a=>a.addEventListener('click',()=>nav.classList.remove('open')));
document.getElementById('year').textContent=new Date().getFullYear();