<?php
$local = 'localhost'; //sql300.infinityfree.com
$nome = 'root'; //if0_36694180
$senha = ''; //xNv9WiBT5o4
$bd = 'direito-direto'; //if0_36694180_direito_direto

$conexao = new mysqli($local, $nome, $senha, $bd) or die("ERRO ao Realizar Conexão"); 

mysqli_set_charset($conexao, "utf8");