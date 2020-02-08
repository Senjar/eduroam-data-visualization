
var mapGlobal = document.getElementById('mapGlobal');
var mapEurope = document.getElementById('mapEurope');

mapGlobal.onclick = function(){

    var script = document.createElement("script");
    script.type = "text/javascript";
    script.src = "chart-global.js."; 
    document.getElementById("container").appendChild(script);
}

mapEurope.onclick = function(){

    var script = document.createElement("script");
    script.type = "text/javascript";
    script.src = "chart-europe.js."; 
    document.getElementById("container").appendChild(script);
}
