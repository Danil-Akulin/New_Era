var lopp=false;

function klik(pilt){
    pilt.src=kellekord;

    if(vyidukontroll()){
        alert("You got this Ljaguha!!");
        lopp=true;
    }
}

function klikValik(pilt){
    kellekord=pilt.src;
    document.getElementById("pilt19").src=kellekord;
}


function sisu(nr){
    var fnimi=document.getElementById("pilt" + nr).src;
    fnimi=fnimi.split("/").pop();
    return fnimi;
}