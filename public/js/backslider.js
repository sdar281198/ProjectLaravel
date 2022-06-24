window.onload = choosePic;
var myPix = new Array("./img/FONDO\ AMARILLO\ T-06-06.png", "./img/fverdeosc.png","./img/fmoradoosc.png");
function choosePic() {
    var randomNum = Math.floor((Math.random() * myPix.length));
    document.getElementById("header").style.backgroundImage =
        "url(" + myPix[randomNum] + ")";
}
/*Scroll reveal effects */
const menuOpen = document.getElementById('hambMenu');
const menuClose = document.getElementById('hambMenuClose');
const headerOverlay = document.getElementById('body');
const mobileMenu = document.getElementById('mobileMenu');
menuOpen.addEventListener('click', () => {
    mobileMenu.classList.add('menu-opened');
    headerOverlay.classList.add('menu-opened');
});
menuClose.addEventListener('click', () => {
    mobileMenu.classList.remove('menu-opened');
    headerOverlay.classList.remove('menu-opened');
});
window.sr = ScrollReveal();
sr.reveal('#header',{
    duration: 3000,
    origin: 'bottom',
    distance: '-100px'
});
sr.reveal('#navsup',{
    duration: 3000,
    origin: 'bottom',
    distance: '-100px'
});
sr.reveal('.imagecaract',{
    duration: 3000,
    origin: 'bottom',
    distance: '-100px'
});
sr.reveal('.race',{
    duration:3500,
    origin:'left',
    distance:'-100%'
});
// window.onload = changePicture;
// changeBorderNav();
let swiper = new Swiper('.swiper',{
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
      },
});