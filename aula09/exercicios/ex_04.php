<?php

    function verificarAcesso($senhaDigitada){
        if ($senhaDigitada == "123456") {
            echo"senha: $senhaDigitada <br> Acesso Liberado <br>";
        } else {
            echo "senha: $senhaDigitada <br> Acesso Negado";
        }
    }

    verificarAcesso(123456);
    verificarAcesso(21314);

?>