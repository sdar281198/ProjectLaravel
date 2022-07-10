const rankingOpen = document.getElementById('rankingside');
const rankingClose = document.getElementById('rankingClose');
const cubrirHead = document.getElementById('body');
const rankingMenu = document.getElementById('rankingMenu');
rankingOpen.addEventListener('click', () => {
    rankingMenu.classList.add('menu-opened');
    cubrirHead.classList.add('menu-opened');
});
rankingClose.addEventListener('click', () => {
    rankingMenu.classList.remove('menu-opened');
    cubrirHead.classList.remove('menu-opened');
});