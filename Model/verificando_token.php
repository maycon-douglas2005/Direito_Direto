<?php
include('config.php');
session_start();

if(isset($_POST['token'])){
    $token_fornecido_pelo_usuario = $_POST['token'];

    // Verificando se token esta cadastrado
    $verificandoToken = $conexao->prepare('SELECT * FROM tokens WHERE token = :token');
    $verificandoToken->bindParam(':token', $token_fornecido_pelo_usuario);
    $verificandoToken->execute();

    if($verificandoToken->rowCount() > 0){
        // Verificando a qual e-mail o token é relacionado e guardando para usar na proxima pagina
        $verificando_email_do_token = $conexao->prepare('SELECT * FROM tokens WHERE token = :token');
        $verificando_email_do_token->bindParam(':token', $token_fornecido_pelo_usuario);
        $verificando_email_do_token->execute();

        $resultado = $verificando_email_do_token->fetch(PDO::FETCH_ASSOC);

        if($resultado){
            $_SESSION['email_do_token'] = $resultado['email'];
        }

        header('Location: ../View/redefinirSenha.php');
        exit;
    }else {
        echo 'Insira um token válido!';
    }
}