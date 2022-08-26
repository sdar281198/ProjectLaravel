const arrowDown = document.getElementById('downarrow');
const schoolPicNm = document.getElementById('schoolpicandname');
const post = document.getElementById('position');
const rank = document.getElementById('rankingside');
const points = document.getElementById('points');
const cole = document.getElementById('school');
const flechadown = document.getElementById('flechadown');
const flechaup = document.getElementById('flechaup');
const user = document.getElementById('user');

flechadown.addEventListener('click', ()=>{
    schoolPicNm.classList.remove('dissapear');
    post.classList.remove('dissapear');
    rank.classList.remove('dissapear');
    points.classList.remove('dissapear');
    flechaup.classList.remove('dissapear');
});
flechadown.addEventListener('click',()=>{
    cole.classList.add('grower');
    flechadown.classList.add('dissapear');
});
flechaup.addEventListener('click',()=>{
    schoolPicNm.classList.add('dissapear');
    post.classList.add('dissapear');
    rank.classList.add('dissapear');
    points.classList.add('dissapear');
    flechaup.classList.add('dissapear');
});
flechaup.addEventListener('click',()=>{
    cole.classList.remove('grower');
    flechadown.classList.remove('dissapear');
});


window.addEventListener("load", onLoadFunction);
function onLoadFunction(e){ 

    onResizeFunction(); 
    window.addEventListener("resize", onResizeFunction);
}
function onResizeFunction(e){
    if(window.innerWidth < 1001) {
      cole.classList.remove('coleg');
      cole.style.height = '10%';
    }else if (window.innerWidth > 1001) {
        cole.classList.add('coleg');
    }
  }
onLoadFunction();





