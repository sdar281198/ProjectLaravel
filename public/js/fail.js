const failOpen = document.getElementById('acertijobuttonfail');
const failClose = document.getElementById('failClose');
const tapar = document.getElementById('body');
const failPop = document.getElementById('failriddle');
failOpen.addEventListener('click', () => {
    failPop.classList.add('fail-opened');
    tapar.classList.add('fail-opened');
});
failClose.addEventListener('click', () => {
    failPop.classList.remove('fail-opened');
    tapar.classList.remove('fail-opened');
});