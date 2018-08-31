document.getElementById("tab1-title").onmouseover = function() {mouseOver()};
document.getElementById("tab1-title").onmouseout = function() {mouseOut()};

function mouseOver() {
	document.getElementById("tab1-title").style.color = "rgb(197, 78, 144)";
}

function mouseOut() {
	document.getElementById("tab1-title").style.color = "rgb(187, 187, 187)";
}