<?php
    function msg($nome) {
    echo "<p>Olá, " . $nome . "! Bem-vindo ao nosso site.</p>";
    }

    $n = $_POST['nome'];
    msg("Pietro");
    msg($n);
?>