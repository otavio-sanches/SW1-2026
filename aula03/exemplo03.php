<?php
    Echo "<br> conversões explicitas:";
    $x = 3.5;
    $y = 4.3;
    $z = "9.9";
    $n1 = (int) $x + $y;
    $n2 = (int) ($x + $y);
    $n3 = (float) ($y + $z);
    
    echo "<br> x = 3.5;";
    echo "<br> y = 4.3;";
    echo "<br>z = '9.9';";
    echo "<br>n1 = (int) x + y;";
    echo "<br>n2 = (int) (x + y);";
    echo "<br>n3 = (float) (y + z);";
    echo "<br> resultados: $n1, $n2, $n3 ";


?>

<?php
    echo "<br> Exibição de Variáveis: ";
    $n = "penta";
    echo "<br> n = 'penta';";
    echo "<br>O Brasil é $n campeão!";
?>

<?php
    $a = "Casal 20";
    $b = 10;
    $c = $a + $b;
    echo $c;
?>