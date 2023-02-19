document.write("<p><h1>Calculadora de média</h1></p>");
//entrada de dados
let primeiraNota = parseFloat(prompt("Digite a primeira nota!"));
let segundaNota = parseFloat(prompt("Digite a segunda nota!"));

//processamento de dados
let media = (primeiraNota + segundaNota) / 2 ;

//saída de dados
document.write("<p><b>Primeira Nota: </b>" + primeiraNota + "</p>");
document.write("<p><b>Segunda Nota: </b>" + segundaNota + "</p>");
document.write("<b>Media final:</b> " + media);