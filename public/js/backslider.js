// let i = 0;
let images = [];
let slideTime = 5000; // 3 seconds
// let changeBorderTime = 4999;
images[0] = '../img/famarilloosc.png';
images[1] = '../img/fmoradoosc.png';
images[2] = '../img/fverdeosc.png';
console.log(images);
// let colors = [];
// colors[0] = 'white';
// colors[1] = 'black';
// colors[2] = '#d3761c';
let ground = document.getElementById('header');
// let navBorder = document.getElementById('navsup');


function changePicture() {
    ground.style.background = "url("+ images[i] + ")";
    ground.style.backgroundSize = 'cover';

    if (i < images.length - 1) {
        i++;
    } else {
        i = 0;
    }
    setTimeout(changePicture, slideTime);
}
// function changeBorderNav(){
//     navBorder.style.borderColor = colors[i];
//     if(i<colors.length-1){
//         i++;
//     }
//     else{
//         i =0;
//     }
//     setTimeout(changeBorderNav,changeBorderTime );
// }

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