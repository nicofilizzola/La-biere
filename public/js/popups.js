let gridBtnFirst = document.querySelector('#gridBtn1');
let gridBtnSecond = document.querySelector('#gridBtn2');
let gridBtnThird = document.querySelector('#gridBtn3');
let gridBtnFourth = document.querySelector('#gridBtn4');

let popupFirst = document.querySelector('#popupFirst');
let popupSecond = document.querySelector('#popupSecond');
let popupThird = document.querySelector('#popupThird');
let popupFourth = document.querySelector('#popupFourth');

let closeFirst = document.querySelector('#popupFirstClose');
let closeSecond = document.querySelector('#popupSecondClose');
let closeThird = document.querySelector('#popupThirdClose');
let closeFourth = document.querySelector('#popupFourthClose');

let body = document.querySelector('body *:not(.popup)');

gridBtnFirst.addEventListener('click', function(){
    popupFirst.className += ' popup__container--appear';
    body.className += ' blur';
})
closeFirst.addEventListener('click', function(){
    popupFirst.classList.remove('popup__container--appear');
    body.classList.remove('blur');
})

gridBtnSecond.addEventListener('click', function(){
    popupSecond.className += ' popup__container--appear';
    body.className += ' blur';
})
closeSecond.addEventListener('click', function(){
    popupSecond.classList.remove('popup__container--appear');
    body.classList.remove('blur');
})

gridBtnThird.addEventListener('click', function(){
    popupThird.className += ' popup__container--appear';
    body.className += ' blur';
})
closeThird.addEventListener('click', function(){
    popupThird.classList.remove('popup__container--appear');
    body.classList.remove('blur');
})

gridBtnFourth.addEventListener('click', function(){
    popupFourth.className += ' popup__container--appear';
    body.className += ' blur';
})
closeFourth.addEventListener('click', function(){
    popupFourth.classList.remove('popup__container--appear');
    body.classList.remove('blur');
})