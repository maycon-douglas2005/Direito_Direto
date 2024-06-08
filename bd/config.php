<?php
$local = 'Localhost';
$nome = 'root';
$senha = '';
$bd = 'direito-direto';

$conexao = new mysqli($local, $nome, $senha, $bd) or die("ERRO ao Realizar Conexão"); 

mysqli_set_charset($conexao, "utf8");
