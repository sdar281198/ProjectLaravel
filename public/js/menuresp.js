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