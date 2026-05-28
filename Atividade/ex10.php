<?php

    $numeros = [10, 9, 7, 5];
    $qtde = count($numeros);
    $valor = 0;
    for ($i=0; $i <= $qtde-1 ; $i++) { 
        $valor = $valor + $numeros[$i]; 
    }
    $media = $valor/$qtde;

    echo "$media";
?>