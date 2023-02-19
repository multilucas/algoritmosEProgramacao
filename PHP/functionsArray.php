<?php
    //This function write the elements on the screen browser.
    function readArray($arrayName){
        for($i = 0;$i < (count($arrayName));$i++){
            echo "$arrayName[$i]<br>";
        }
    }
    //Same arrays
    $cars = array("Corsa","Monza","Voyage","Sandero","Fox","Carrera");
    $numeros = array(0,1,2,3,4,5,6,7,8,9);
    $schools = array("Harvard","Senac","M.I.T","USP","UFRJ","UFMS");
    $guns = array("AK-47","M16","Desert Eagle","Mini Gun",".50");

    
    echo readArray($cars);
?>