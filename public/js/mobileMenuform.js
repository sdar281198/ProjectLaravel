const mobileMenuform = document.getElementById('mobileMenuform');
const menuOpen = document.getElementById('hambMenu');
const menuClose = document.getElementById('hambclose');
const headerOverlay = document.getElementById('body');

menuOpen.addEventListener('click', () => {
    mobileMenuform.classList.add('menu-opened');
    headerOverlay.classList.add('menu-opened');
});
menuClose.addEventListener('click', () => {
    mobileMenuform.classList.remove('menu-opened');
    headerOverlay.classList.remove('menu-opened');
});