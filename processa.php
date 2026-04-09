<?php 
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //email: adm@email.com
    //senha: 1234

    if ($email == 'adm@email.com' && $senha == '1234') {
        //para área restrita...
        // echo "Vamos para a área restrita";
        $nome = "Yasmin";

        header('Location: restrita.php?nome='.$nome);
    } else {
        //Volta formulario
        // echo "Volta para o formulario";
        // header('Location: formulario.php');
        header('Location: error.php');
    }
    
?>