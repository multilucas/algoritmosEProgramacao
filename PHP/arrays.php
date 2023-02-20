<?php
    $carros = array("corsa","monza","corolla","tucson","mazda","fusca","uno","golf");
    $cores = array("branco","preto","azul","rosa","marrom");
    $herois = array("batman","Robin","Coringa",);
    



    function escreveArray($nomeArray){
        for($i = 0;$i < (count($nomeArray));$i++){
            echo "$nomeArray[$i]<br>";
        }
    }
    escreveArray($herois);
    escreveArray($cores);
    escreveArray($carros);


    
?>