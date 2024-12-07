<?php
session_start();
include_once('config.php');

 try {
    $email = $_POST['email'];
    $senha = $_POST['senha'];  

    
    $verificacao = $conexao->prepare("SELECT * FROM clientes WHERE `e-mail` = :email AND senha = :senha");
    $verificacao->bindParam(':email', $email);
    $verificacao->bindParam(':senha', $senha);
    $verificacao->execute(); 


    if($verificacao->rowCount() > 0){
      //valores estao na tabela clientes
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: ../View/buscaAdvogado.php');
    }
    
    
    elseif($verificacao->rowCount() == 0){ 
    //os valores nao estao na tabela clientes  
        
        
        $verificacao = $conexao->prepare("SELECT * FROM advogados WHERE `e-mail` = :email AND senha = :senha"); 
        $verificacao->bindParam(':email', $email);
        $verificacao->bindParam(':senha', $senha);
        $verificacao->execute();
    
        
        if($verificacao->rowCount() > 0){
        //valores estao na tabela advogados
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            
            $puxandoIdAdv = $conexao->prepare('SELECT * FROM advogados WHERE `e-mail` = :email');

            $puxandoIdAdv->bindParam(':email', $email);

            $puxandoIdAdv->execute();

            foreach($puxandoIdAdv as $idDoAdv){
                $_SESSION['idDoAdvSegundoLogin'] = $idDoAdv['id'];
            }

           header('Location: ../View/perfilAdvogado.php');
        }

        elseif($verificacao->rowCount() == 0){  
        //Vaores nao estao em nenhuma tabela
        header('Location: ../View/login.php');
        } 
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
} 
?>