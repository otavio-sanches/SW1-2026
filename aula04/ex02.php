<?php
    // 2. Faça um programa PHP que defina uma constante PI com valor 3.141592. Crie
    // uma variável, atribua um valor que represente o raio de uma esfera. Calcule e
    // apresente sua área e seu volume, dados pelas fórmulas:

    $pi = 3.141592;
    $r = 4;

    $a = 4 * $pi * ($r * $r);
    echo "A area é igual a: $a";

    echo "<br>";

    $v = 4/3 * $pi * ($r * $r * $r);
    echo "O volume é igual a: $v"

?>