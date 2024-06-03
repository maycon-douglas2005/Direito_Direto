<?php
$local = 'Localhost';
$nome = 'root';
$senha = '';
$bd = 'direito-direto';

$conexao = new mysqli($local, $nome, $senha, $bd) or die("ERRO ao Realizar Conexão"); 

/*
if($conexao->connect_errno){
    echo 'ERRO ao realizar conexão';
} else {
    echo 'Conexão realiza com sucesso';
}*/
