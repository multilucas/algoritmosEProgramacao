<?php
    //same indexed arrays
    $numbers1 = array("zero", "one", "two", "three", "four");
    $numbers2 = array("five", "six", "seven", "eight", "nine");
    $colors1 = array("red" => "vermelho", "green" => "verde", "blue" => "azul");
    $color2 = array("yellow" => "amarelo", "pink" => "rosa");
    
    //merging two arrays
    $mergeNumbers = array_merge($numbers1,$numbers2);
    echo "<h2>array_merge()</h2>";
    foreach($mergeNumbers as $key => $value){
        echo "$value<br>";
    };
    
    //same associative arrays
    $pokeColors1 = array("Bulbasaur" => "Verde",
    "Squirtle" => "Azul", "Charmander" => "Laranja");
    $pokeColors2 = array("Pikachu" => "Amarelo", "Eevee" => "Marrom");
    
    //merging two associative arrays
    $mergePokeColors = array_merge($pokeColors1,$pokeColors2);
    echo "<h2>array_merge()</h2>";
    foreach($mergePokeColors as $key => $value){
        echo "$key => $value<br>";
    }

?>