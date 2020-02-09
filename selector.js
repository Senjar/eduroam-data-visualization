
var mapGlobal = document.getElementById('mapGlobal');
var mapEurope = document.getElementById('mapEurope');

mapGlobal.onclick = function(){
	var old = document.getElementById("container").childNodes[0];
    var script = document.createElement("script");
    script.type = "text/javascript";
    script.src = "chart-global.js"; 
	old.replaceChild(script, old.childNodes[0]);
}

mapEurope.onclick = function(){
	var old = document.getElementById("container").childNodes[0];
    var script = document.createElement("script");
    script.type = "text/javascript";
    script.src = "chart-europe.js"; 
	old.replaceChild(script, old.childNodes[0]);
}