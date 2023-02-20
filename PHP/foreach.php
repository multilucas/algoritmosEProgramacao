<?php
    $cars = array("corsa","monza","corolla","tucson","mazda","fusca","uno","golf");
    $colors = array("white","black","blue","pink","brown");
    $heroes = array("batman","Robin","Joker",);
    $foods = array("Fruit" => "Banana",
        "Meat" => "Entrecote",
        "Fast-food" => "Big-mac",
        "Vegetable" => "Potatoes",
        "Flowers" => "Chamomile");


    function printArray($array){
        foreach($array as $key => $value){
            echo "$key : $value<br>";
        }
    }
    echo printArray($foods);

?>