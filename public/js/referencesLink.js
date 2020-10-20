const referencesLink = document.querySelector('#references_link');
const referencesUrl = 'mentions_legales.php#references';

referencesLink.addEventListener('click', function(){
    event.preventDefault();
    transStart();
    setTimeout(function(){
        location.assign(referencesUrl);
    }, 750);
})