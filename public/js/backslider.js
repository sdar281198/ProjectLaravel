// let i = 0;
// let images = [];
// let slideTime = 5000; // 3 seconds
// let changeBorderTime = 4999;
// images[0] = '../assets/img/famarilloosc.png';
// images[1] = '../assets/img/fmoradoosc.png';
// images[2] = '../assets/img/fverdeosc.png';
// let colors = [];
// colors[0] = 'white';
// colors[1] = 'black';
// colors[2] = '#d3761c';
// let ground = document.getElementById('header');
// let navBorder = document.getElementById('navsup');
// console.log(navBorder);


// function changePicture() {
//     ground.style.background = "url("+ images[i] + ")";
//     ground.style.backgroundSize = 'cover';

//     if (i < images.length - 1) {
//         i++;
//     } else {
//         i = 0;
//     }
//     setTimeout(changePicture, slideTime);
// }
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