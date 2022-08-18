document.write("<h2>Calculadora de piscina</h2>");

//entrada de dados
let ladoA = parseFloat(prompt("Digite a largura da piscina"));
let ladoB = parseFloat(prompt("Digite o comprimento da piscina"));

//processamento
let areaPiscina = ladoA * ladoB;
let perimetroPiscina = (ladoA * 2) + (ladoB * 2);

//saída
document.write("<p><b>Largura da piscina:</b> " + ladoA + " Mts</p>");
document.write("<p><b>Comprimento da piscina:</b> " + ladoB + " Mts</p>");
document.write("<p><b>Area da piscina:</b> " + areaPiscina + " M²</p>");
document.write("<p><b>Perimetro da piscina:</b> " + perimetroPiscina + " Mts</p>");