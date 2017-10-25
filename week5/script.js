document.querySelector("#other").addEventListener('click', h);
function h(event){
	let a = event.target;
	document.querySelector("#first img").src = a.src;
}
