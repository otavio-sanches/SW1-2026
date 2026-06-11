<?php

    function msg($periodo){
    // {
    //     if ($periodo == "Manhã") {
    //         echo "Bom Dia";
    //     } else {
    //         if ($periodo == "Tarde") {
    //             echo "Boa Tarde";
    //         } else {
    //             if ($periodo == "Noite") {
    //                 echo "Boa Noite";
    //             } else {
    //                 echo "INVALIDO";
    //             }
    //         }
    //     }
    // }

    // msg("Manhã");

        switch ($periodo) {
            case "manha":
                echo"Bom Dia";
                break;
            case "tarde":
                echo "Boa Tarde";
                break;
            case "noite":
                echo "Boa Noite";
                break;
            default:
                echo "INVALIDO";
                break;
        }
    }

    msg("manha");

?>