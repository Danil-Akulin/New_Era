function kustuta(){
    var t=document.getElementById("desktop").getContext("2d");
    t.clearRect(0,0, 450, 600);//x,y, width, height
}

function draw(){
    jalad();
    jjalad();
    keha();
    kkeha();
    rem();
    pea();
    muts();
    kaed();
}

function jalad(){
    var t = document.getElementById("desktop").getContext("2d");
    t.fillStyle="black";
    t.fillRect(125,525,75,40);//x,y, height, width
    t.fillRect(225,525,75,40);
}

function jjalad(){
    var j = document.getElementById("desktop").getContext("2d");
    j.fillStyle="white";
    j.fillRect(150,375,50,150);//x,y, height, width
    j.fillRect(225,375,50,150);
}

function keha(){
    var b = document.getElementById("desktop").getContext("2d");
    b.fillStyle="grey";
    b.fillRect(150,200,125,175);//x,y, height, width
}

function kkeha(){
    var b = document.getElementById("desktop").getContext("2d");
    b.fillStyle="grey";
    b.fillRect(195,190,40,10);//x,y, height, width
}

function rem(){
    var r = document.getElementById("desktop").getContext("2d");
    var b = document.getElementById("desktop").getContext("2d");
    var c = document.getElementById("desktop").getContext("2d");
    r.fillStyle="black";
    r.fillRect(150,375,125,25);//x,y, height, width
    b.fillStyle="white";
    b.fillRect(160,385,5,5);
    b.fillRect(170,385,5,5);
    b.fillRect(180,385,5,5);
    b.fillRect(190,385,5,5);
    b.fillRect(230,385,5,5);
    b.fillRect(240,385,5,5);
    b.fillRect(250,385,5,5);
    b.fillRect(260,385,5,5);
    c.fillStyle="white";
    c.fillRect(205,380,15,15);
}

function pea(){
    var j = document.getElementById("desktop").getContext("2d");
    var b = document.getElementById("desktop").getContext("2d");
    j.fillStyle="red";
    j.fillRect(180,130,70,60);//x,y, height, width
    j.fillRect(200,125,30,20);
    b.fillStyle="black";
    b.fillRect(190,145,10,10);
    b.fillRect(230,145,10,10);
    b.fillRect(190,175,50,10);
}

function muts(){
    var b = document.getElementById("desktop").getContext("2d");
    b.fillStyle="black";
    b.fillRect(170,120,90,15);//x,y, height, width
    b.fillRect(180,90,70,40);
}

function kaed(){
    var b = document.getElementById("desktop").getContext("2d");
    b.fillStyle="black";
    b.fillRect(120,200,30,140);//x,y, height, width
    b.fillRect(275,200,30,140);//x,y, height, width

}