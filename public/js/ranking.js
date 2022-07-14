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

const option1 = document.getElementById('globalTable');
const option2 = document.getElementById('personalTable');
const content1 = document.getElementById('globalTableContainer');
const content2 = document.getElementById('personalTableContainer');
let chose = 1;

const changeOption = () =>{
    chose == 1 ? (
        option1.classList.value = 'tabrank tabrankActive',
        content1.classList.value = 'contentRank contentRankActive'
    )
    :(
        option1.classList.value = 'tabrank',
        content1.classList.value = 'contentRank'
    )

    chose == 2 ?(
        option2.classList.value = 'tabrank tabrankActive',
        content2.classList.value = 'contentRank contentRankActive'
    )
    :(
        option2.classList.value = 'tabrank',
        content2.classList.value = 'contentRank'
    )
}

option1.addEventListener('click',()=>{
    chose = 1
    changeOption();
})
option2.addEventListener('click',()=>{
    chose = 2
    changeOption();
})