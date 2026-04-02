<?php 
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // email: adm@email
    // senha: 1234

    if ($email == 'adm@email.com' && $senha == '1234') {
        //echo "Vamos para a área restrita";
        $nome = 'Otávio';

        header('Location: restrita.php?nome='.$nome);
    } else {
        //echo "Vamos para o formulario";
        header('Location: erro.php');

    }
    

?>