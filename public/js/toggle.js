const nav = document.getElementById('divNav');
      togglebtn = nav.querySelector('.toggle-btn');

togglebtn.addEventListener('click',()=>{
  nav.classList.toggle('open');
})

function onDrag({movementY}){
  const navStyle = window.getComputedStyle(nav),//getting all the css style of nav
       navTop = parseInt(navStyle.top),//getting nav top value and parsing it
       navHeight = parseInt(navStyle.height),
       windHeight = window.innerHeight;

  nav.style.top = navTop > 0 ? `${navTop + movementY}px` : "1px";
}
nav.addEventListener('mousedown',()=>{
  nav.addEventListener('mousemove', onDrag);
})
nav.addEventListener('mouseup',()=>{
  nav.removeEventListener('mousemove', onDrag);
})
