
function start(){
var btn = document.getElementById("btn");
btn.addEventListener('click',hidden,false)
}

function hidden(){
    var f = document.getElementById("form");
    var i = document.getElementById("inst");

    if( f.style.display == "none"){
        f.style.display = "block";
    }
    else{
        f.style.display = "none";
        i.style.display = "block";
    }
}

window.addEventListener("load", start , false);