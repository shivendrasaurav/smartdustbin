function progress_anim1(){
    var a = document.querySelector("#d1");
    console.log(a.style.width);
    var b = a.style.width;
    if(b <"50%"){
        a.style.background = ("#28B85B");
    }
    else if(b >="50%" && b <"80%"){
        a.style.background = ("#06A77D");
    }
    else if(b >="80%"){
        a.style.background = ("#CC2936");
    }
    var a = document.querySelector("#d2");
    console.log(a.style.width);
    var b = a.style.width;
    if(b <"50%"){
        a.style.background = ("#28B85B");
    }
    else if(b >="50%" && b <"80%"){
        a.style.background = ("#06A77D");
    }
    else if(b >="80%"){
        a.style.background = ("#CC2936");
    }
}