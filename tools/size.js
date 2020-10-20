setInterval(size, 100);
function size(){
	var w = window.innerWidth;
	var h = window.innerHeight;
	var p = document.querySelector('#coords');
	p.textContent = w + ", " + h;
}