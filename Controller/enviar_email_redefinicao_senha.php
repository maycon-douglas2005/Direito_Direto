<?php 
    include('../Model/config.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];

        // verificando se o email esta cadastrado na tabela clientes
        $verificacaoCliente = $conexao->prepare('SELECT `e-mail` FROM clientes WHERE `e-mail` = :email');
        $verificacaoCliente->bindParam(':email', $email);
        $verificacaoCliente->execute();


        // verificando se o email esta cadastrado na tabela advogados
        $verificacaoAdvogado = $conexao->prepare('SELECT `e-mail` FROM advogados WHERE `e-mail` = :email');
        $verificacaoAdvogado->bindParam(':email', $email);
        $verificacaoAdvogado->execute();




        if($verificacaoCliente->rowCount() > 0){
            // Gera um token de redefinição (um código único)
            $token = str_pad(random_int(0, 99999), 5, '0', STR_PAD_LEFT);

            // Envia o link de redefinição por email
            $link_reset = "View/redefinirSenha.php?token=" . $token;
            $mensagem = "Clique no link a seguir para redefinir sua senha: " . $link_reset;
            $headers = "From: https://direitodireto.online";

            mail($email, "Redefinir sua senha", $mensagem, $headers);
            header('Location: ../View/autenticacao.php');

        } else if($verificacaoAdvogado->rowCount() > 0){
            // Gera um token de redefinição (um código único)
            $token = str_pad(random_int(0, 99999), 5, '0', STR_PAD_LEFT);

            // Envia o link de redefinição por email
            $link_reset = "View/redefinirSenha.php?token=" . $token;
            $mensagem = "Clique no link a seguir para redefinir sua senha: " . $link_reset;
            $headers = "From: https://direitodireto.online";

            mail($email, "Redefinir sua senha", $mensagem, $headers);
            header('Location: ../View/autenticacao.php');


        } else {
            echo 'Email não encontrado';
        }

    }