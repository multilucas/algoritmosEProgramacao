let corAtual = "amarelo";
function mudaCor(){
    if(corAtual === "amarelo"){
        document.getElementById("image").src = "amarelo.png";
        corAtual = "vermelho";
    } 
    else
    {
        if(corAtual == "vermelho"){
            document.getElementById("image").src = "vermelho.png";
            corAtual = "verde";
        }
        else
        {
            document.getElementById("image").src = "verde.png";
            corAtual = "amarelo";
        }
    }
}