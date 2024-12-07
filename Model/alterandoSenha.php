<?php
include('config.php');
session_start();

$novaSenha = $_POST['senhaNova'];

// Verificando se e-mail é da tabela clientes ou advogado
$email_referente_ao_token = $_SESSION['email_do_token'];

try{
    $verificando_tabela_do_email = $conexao->prepare('SELECT * FROM clientes WHERE `e-mail` = :email');
    $verificando_tabela_do_email->bindParam(':email', $email_referente_ao_token);
    $verificando_tabela_do_email->execute();
} catch(PDOException $e){
    echo 'Erro ao selecionar e-mail: ' . $e;
}


if($verificando_tabela_do_email->rowCount() > 0){
    try{
        $alterandoSenha = $conexao->prepare('UPDATE clientes SET senha = :senha WHERE `e-mail` = :email');
        $alterandoSenha->bindParam(':senha', $novaSenha);
        $alterandoSenha->bindParam(':email', $email_referente_ao_token);
        $alterandoSenha->execute();

        if($alterandoSenha->execute()){
            header('Location: ../View/senhaAlterada.php');
        }


    } catch(PDOException $e) {
        echo 'Erro ao trocar senha na tabela cliente' . $e;
    }

} else {
    try{
        $alterandoSenha = $conexao->prepare('UPDATE advogados SET senha = :senha WHERE `e-mail` = :email');
        $alterandoSenha->bindParam(':senha', $novaSenha);
        $alterandoSenha->bindParam(':email', $email_referente_ao_token);
        $alterandoSenha->execute();

        if($alterandoSenha->execute()){
            header('Location: ../View/senhaAlterada.php');
        }

    } catch(PDOException $e){
        echo 'Erro ao trocar senha na tabela advogados: ' . $e;
    }

}
