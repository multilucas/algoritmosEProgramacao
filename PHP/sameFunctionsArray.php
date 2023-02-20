<?php
    //indexed arrays
    $cars = array("corsa","monza","corolla","tucson","mazda","fusca","uno","golf");
    $colors = array("white","black","blue","pink","brown");
    $heroes = array("batman","Robin","Joker",);
    
    
    //associative arrays
    $foods = array("Fruit" => "Banana",
        "Meat" => "Entrecote",
        "Fast-food" => "Big-mac",
        "Vegetable" => "Potatoes",
        "Flowers" => "Chamomile");
    //same functions for practice;
    
    echo "<h3>print_r()</h3>";
    print_r($foods);
    echo "<h3>var_dump()</h3>";
    var_dump($cars);
    //print same values
    echo "<h3>normal values</h3>";
    foreach($cars as $value){
        echo "$value<br>";
    };
    echo "<h3>sort()</h3>";

    //sorted arrays print
    sort($cars);
    foreach($cars as $key => $value){
        echo "$value<br>";
    };
    //inverted sort arrays print
    echo "<h3>rsort()</h3>";
    rsort($cars);
    foreach($cars as $key => $value){
        echo "$value<br>";
    };
    echo "<h3>asort()</h3>";
    //associative arrays
    //order by value
    asort($foods);
    foreach($foods as $key => $value){
        echo "$key . $value<br>";
    };
    echo "<h3>arsort()</h3>";
    //inverted order by value
    arsort($foods);
    foreach($foods as $key => $value){
        echo "$key . $value<br>";
    };
    echo "<h3>ksort()</h3>";
    //order by key
    ksort($foods);
    foreach($foods as $key => $value){
        echo "$key . $value<br>";
    };
    echo "<h3>krsort()</h3>";
    //inverted order by key
    krsort($foods);
    foreach($foods as $key => $value){
        echo "$key . $value<br>";
    };
?>