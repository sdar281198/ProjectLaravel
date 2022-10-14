const correctOpen = document.getElementById('acertijobuttonCorrect');
const correctClose = document.getElementById('correctClose');
const tapar = document.getElementById('body');
const correctPop = document.getElementById('correctriddle');
correctOpen.addEventListener('click', () => {
    correctPop.classList.add('fail-opened');
    tapar.classList.add('fail-opened');
});
correctClose.addEventListener('click', () => {
    correctPop.classList.remove('fail-opened');
    tapar.classList.remove('fail-opened');
});