
const imas = document.getElementsByClassName('imas');
const imenos = document.querySelectorAll('.imenos');
const answer = document.querySelectorAll('.answerrespT');
function showandhide(){
    for (let i = 0; i < imas.length; i++) {
        imas[i].addEventListener('click',function(){
            answer[i].classList.add('answerresp');
            imas[i].classList.add('noneans');
            imenos[i].classList.add('blockansw');
        }, false)
    }
    for (let i = 0; i < imenos.length; i++) {
        imenos[i].addEventListener('click',function(){
            answer[i].classList.remove('answerresp');
            imas[i].classList.remove('noneans');
            imenos[i].classList.remove('blockansw');
        }, false)
    }
}
showandhide();