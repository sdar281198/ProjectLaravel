const formAlumnOpen = document.getElementById('butt1');
const formWorkerOpen = document.getElementById('butt2');
const formClose = document.getElementById('formClose');
const formClose2 = document.getElementById('formClose2');
const taparb = document.getElementById('body');
const formPop = document.getElementById('formAlumn');
const formPop2 = document.getElementById('formWorker')
formAlumnOpen.addEventListener('click', () => {
    formPop.classList.add('menu-opened');
    taparb.classList.add('menu-opened');
});
formClose.addEventListener('click', () => {
    formPop.classList.remove('menu-opened');
    taparb.classList.remove('menu-opened');
});

formWorkerOpen.addEventListener('click',()=>{
    formPop2.classList.add('menu-opened');
    taparb.classList.add('menu-opened');
});
formClose2.addEventListener('click', () => {
    formPop2.classList.remove('menu-opened');
    taparb.classList.remove('menu-opened');
}); 