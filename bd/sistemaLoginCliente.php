<?php
    session_start();
        include_once('config.php');
        $email1 = mysqli_real_escape_string($conexao, $_POST['emailCliente']);
        $senha1 = mysqli_real_escape_string($conexao, $_POST['senhaCliente']);
        
        $sql = "SELECT * FROM usuario WHERE email = '$email1' AND senha = '$senha1'";
        $result = mysqli_query($conexao, $sql);
        
        if(mysqli_num_rows($result) == 0){
            unset($_SESSION['emailCliente']);
            unset($_SESSION['senhaCliente']);
            header('Location: ../html-php/loginCliente.html');
        } else {
            $_SESSION['emailCliente'] = $email1;
            $_SESSION['senhaCliente'] = $senha1;
            header('Location: ../html-php/pessoaFisicaLogado.php');
        }
?>