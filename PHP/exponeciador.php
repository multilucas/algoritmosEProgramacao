<?php
    function exponeciaNum($numero,$exponente){
        $resultado = $numero ** $exponente;
        return $resultado;
    }
    echo exponeciaNum(5,2);
    echo exponeciaNum(100,2);
?>