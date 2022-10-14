const completedOpen = document.getElementById('acertijobuttoncompleted');
const completedClose = document.getElementById('completedClose');
const tapar = document.getElementById('body');
const completedPop = document.getElementById('completedriddle');
completedOpen.addEventListener('click', () => {
    completedPop.classList.add('fail-opened');
    tapar.classList.add('fail-opened');
});
completedClose.addEventListener('click', () => {
    completedPop.classList.remove('fail-opened');
    tapar.classList.remove('fail-opened');
});