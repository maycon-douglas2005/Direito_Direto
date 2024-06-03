<?php
/* Função if serve para verificar se o formulario foi submitado, e se foi então o usuario 
tera acesso ao sistema, caso contrario ele irá retornar para o Login*/
    if(isset($_POST['submit']) && !empty($_POST['emailCliente']) && !empty($_POST['senhaCliente'])) 
    {
        include_once('config.php');
        $email1 = $_POST['emailCliente'];
        $senha1 = $_POST['senhaCliente'];

        //Criando esquema para verificar se os parâmetros acima existem no banco de dados
        $sql = "SELECT * FROM usuario WHERE email = '$email1' AND senha = '$senha1'";
         
        //Função para executar a função acima no banco de dados
        $result = $conexao->query($sql); // <-- Verificação no banco de dados CONCLUIDA

        //Verificando se numeros de linhas for maior que 1, pq se for, entao o valor digitado foi encontrado no bd
        if(mysqli_num_rows($result) < 1){

            /*se for menor que 1 (o registro nao existe no banco de dados) entao vai redirecionar 
            para o proprio arquivo de login */
            header('Location: ../html-php/loginCliente.php');
            exit();

        } else{
            /*se for maior que 1 (o registro existe no banco de dados) entao vai redirecionar 
            para o arquivo 'pessoaFisicaLogado'*/

            header('Location: loginAdvogado.php');
            exit();
        }

    } else{
        header('Location: ../html-php/loginCliente.php');
    }
?>