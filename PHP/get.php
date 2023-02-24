<?php
    //echo "seu nome é " . $_GET["nome"];

// http://localhost/project/algoritmos/PHP/get.php?nome=Lucas
// Esse link envia pela query string o valor do GET, no caso "Lucas"
?>
<?php
    echo "Seu nome é: " . $_GET["nome"]."<br>";
    echo "Seu telefone é: " . $_GET["tel"]."<br>";
    echo "Seu email é: " . $_GET["email"]."<br>";
    echo "Seu endereço é: ". $_GET["end"]."<br>";
?>