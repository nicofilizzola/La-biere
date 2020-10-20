//VARS
let btn1 = document.getElementById('nav-1');
let btn2 = document.getElementById('nav-2');
let btn3 = document.getElementById('nav-3');
let btn4 = document.getElementById('nav-4');
let btn5 = document.getElementById('nav-5');

let btn1Resp = document.getElementById('nav-1-resp');
let btn2Resp = document.getElementById('nav-2-resp');
let btn3Resp = document.getElementById('nav-3-resp');
let btn4Resp = document.getElementById('nav-4-resp');
let btn5Resp = document.getElementById('nav-5-resp');

let link1 = 'index.php';
let link2 = 'consommation.php';
let link3 = 'types.php';
let link4 = 'faire_sa_biere.php';
let link5 = 'nous.php';

function trans1(){
	transStart();
	setTimeout(function(){
		location.assign(link1);
	}, 750);
}
function trans2(){
	transStart();
	setTimeout(function(){
		location.assign(link2);
	}, 750);
}
function trans3(){
	transStart();
	setTimeout(function(){
		location.assign(link3);
	}, 750);
}
function trans4(){
	transStart();
	setTimeout(function(){
		location.assign(link4);
	}, 750);
}
function trans5(){
	transStart();
	setTimeout(function(){
		location.assign(link5);
	}, 750);
}

// FUNCTION CALL
btn1.addEventListener('click', trans1);
btn2.addEventListener('click', trans2);
btn3.addEventListener('click', trans3);
btn4.addEventListener('click', trans4);
btn5.addEventListener('click', trans5);
btn1Resp.addEventListener('click', trans1);
btn2Resp.addEventListener('click', trans2);
btn3Resp.addEventListener('click', trans3);
btn4Resp.addEventListener('click', trans4);
btn5Resp.addEventListener('click', trans5);

// RESPONSIVE

let burgerMenu = document.querySelector('#burgerMenu');
let closeNav = document.querySelector('#closeNav');
let responsiveNav = document.querySelector('.responsive-nav');

burgerMenu.addEventListener('click', function(){
	responsiveNav.classList.replace('menu--hidden', 'menu--appear');
})

closeNav.addEventListener('click', function(){
	responsiveNav.classList.replace('menu--appear', 'menu--hidden');
})