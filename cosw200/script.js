// JavaScript Document
function greeting() {
	var name = prompt("What your name?");
	var msg1 = "Hello, " + name + "!";
	document.getElementById("greeting").innerHTML = msg1;
}

function bigImg(x) {
  x.style.height = "400px";
  x.style.width = "400px";
}

function normalImg(x) {
  x.style.height = "200px";
  x.style.width = "200px";
}