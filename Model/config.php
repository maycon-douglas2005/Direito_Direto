<?php

$usuario = "root";
$senha = "";
$database = "direito_direto";
$host = "localhost";

try {
    $conexao = new PDO("mysql:host=$host;dbname=$database", $usuario, $senha);
    
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}

?>