<?php

    $cores = ["preto", "roxo", "rosa"];
    array_push($cores, "branco");
    array_shift($cores);
    foreach ($cores as $indice) {
            echo "$indice <br>";
        }   

?>