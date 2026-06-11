<?php

    $temperaturas = [22.5, 24.0, 25.5, 23.0];

    function calcularMediaTemperatura($temperaturas){
        $qtde = count($temperaturas);
        $soma = array_sum($temperaturas);
        $div = $soma / $qtde ;

        echo $div;
    }

    calcularMediaTemperatura($temperaturas);
?>