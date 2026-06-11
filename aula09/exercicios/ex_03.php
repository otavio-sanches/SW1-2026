<?php

    function calcularAutonomia($capacidadeBateria, $consumoPorMinuto){
        $resultado = $capacidadeBateria / $consumoPorMinuto;
        echo "Tempo estimado de voo: $resultado minutos.";
    }

    calcularAutonomia(100, 10)
?>