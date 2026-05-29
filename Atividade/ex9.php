<?php

$numeros = range(1, 10);

$pares = array_filter($numeros, function($n) {
    return $n % 2 == 0;
});

print_r($pares);

?>