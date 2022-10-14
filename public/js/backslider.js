window.onload = choosePic;
var myPix = new Array("./img/landing/famarilloosc.png", "./img/landing/fverdeosc.png","./img/landing/fmoradoosc.png");
function choosePic() {
    var randomNum = Math.floor((Math.random() * myPix.length));
    document.getElementById("header").style.backgroundImage =
        "url(" + myPix[randomNum] + ")";
}
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
// sr.reveal('.classicLevel',{
//     duration:3500,
//     origin:'bottom',
//     distance:'-100%'
// });
sr.reveal('#presnav',{
    duration:3500,
    origin:'bottom',
    distance:'-100%'
});
sr.reveal('#presTitle',{
    duration:4000,
    origin:'bottom',
    distance:'-100%'
});
sr.reveal('#img',{
    duration:4500,
    origin:'right',
    distance:'-100%'
});
// sr.reveal('.modesimg',{
//     duration:4000,
//     origin:'left',
//     distance:'-100%'
// });
sr.reveal('#butts',{
    duration:5000,
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


