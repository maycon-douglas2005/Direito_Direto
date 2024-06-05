<?php
session_start();
    include_once('config.php');
    $email1 = mysqli_real_escape_string($conexao, $_POST['emailAdvogado']);
    $senha1 = mysqli_real_escape_string($conexao, $_POST['senhaAdvogado']);
    
    $sql = "SELECT * FROM usuario WHERE email = '$email1' AND senha = '$senha1'";
    $result = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($result) == 0){
        unset($_SESSION['emailAdvogado']);
        unset($_SESSION['senhaAdvogado']);
        header('Location: ../html-php/loginAdvogado.html');
    } else {
        $_SESSION['emailAdvogado'] = $email1;
        $_SESSION['senhaAdvogado'] = $senha1;
        header('Location: ../html-php/perfilAdvogado.php');
    }
?>