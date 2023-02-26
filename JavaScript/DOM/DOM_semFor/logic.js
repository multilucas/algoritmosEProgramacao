
function amarelo(){
    elementImg.setAttribute("src","amarelo.png");
document.getElementById("btn").setAttribute("onClick","vermelho()");
}
function vermelho(){
    document.getElementById("image").setAttribute("src","vermelho.png");
    document.getElementById("btn").setAttribute("onClick","verde()");
}
function verde(){
    document.getElementById("image").setAttribute("src","verde.png");
    document.getElementById("btn").setAttribute("onClick","amarelo()");;
}
