<?php
    $pares = [];
    $num = [4, 17, 2, 9, 23, 67];
    foreach ($num as $n) {
        echo array_filter($num, $n % 2 == 0 );
    }
    // array_filter($num % 2 == 0 );
    // echo array_filter($num, % 2 == 0 );
?>