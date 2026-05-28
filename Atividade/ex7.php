<?php
    echo "Ex1 <br>";
    $numeros = [10, 67, 2, 99, 30];
    sort($numeros);
    foreach ($numeros as $indice) {
            echo "$indice <br>";
        }   

?>

<?php
    echo "Ex2 <br>";
    $numeros = [10, 67, 2, 99, 30];
    rsort($numeros);
    foreach ($numeros as $indice) {
            echo "$indice <br>";
        }   

?>