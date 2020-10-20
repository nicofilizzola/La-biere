let transitionBlockIn = document.querySelector('.transition--in');
window.addEventListener('load', function(){
	transitionBlockIn.className += ' transition--play';
});

// TRANSITION FUNCTIONS
function transStart(){
    const transitionBlockOut = document.querySelector('.transition--out');
	transitionBlockOut.className += ' transition--reverse';
}


let links = document.querySelectorAll('footer a');
let urls = ['consommation.php#secondSection', 'consommation.php#thirdSection', 'consommation.php#fourthSection', 'consommation.php#fifthSection', 'types.php#firstSection', 'types.php#secondSection', 'faire_sa_biere.php#firstSection', 'faire_sa_biere.php#secondSection', 'faire_sa_biere.php#thirdSection', 'faire_sa_biere.php#fourthSection', 'nous.php#firstSection', 'nous.php#secondSection', 'nous.php#thirdSection', 'mentions_legales.php'];

for (let i = 0; i < links.length; i++){
	links[i].addEventListener('click', function(){
		
		event.preventDefault();
		transStart();
		setTimeout(function(){
			location.assign(urls[i]);
		}, 750);
	});
}