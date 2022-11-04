const canjopen = document.querySelectorAll('.canjButtopen');
const canjclose = document.getElementById('canjclose');
const taparbod = document.getElementById('body');
const canjAvaio = document.getElementById('canjAvai');
for (let i = 0; i < canjopen.length; i++) {
    canjopen[i].addEventListener('click',function(){
        canjAvaio.classList.add('canj-opened');
        taparbod.classList.add('canj-opened');
    },false);    
}
canjclose.addEventListener('click',function(){
    canjAvaio.classList.remove('canj-opened');
    taparbod.classList.remove('canj-opened');
},false);    

