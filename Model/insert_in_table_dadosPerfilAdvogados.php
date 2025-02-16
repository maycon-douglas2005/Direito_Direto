<?php
include('../Model/config.php');

$id = $_GET['id'];
$especialidade = $_GET['especialidade'];

$resumo_profissional = "Escreva sobre você aqui!";
$especialidade_2 = "2º especialidade";
$especialidade_3 = "3º especialidade";
try{

$inserindo_dados = $conexao->prepare("INSERT INTO dados_perfil_advogado (id_advogado, resumo_profissional, especialidade_1, especialidade_2, especialidade_3) VALUES (:id, :resumo, :especialidade_1, :especialidade_2, :especialidade_3)");

$inserindo_dados->bindParam(':id', $id);
$inserindo_dados->bindParam(':resumo', $resumo_profissional);
$inserindo_dados->bindParam(':especialidade_1', $especialidade);
$inserindo_dados->bindParam(':especialidade_2', $especialidade_2);
$inserindo_dados->bindParam(':especialidade_3', $especialidade_3);

$inserindo_dados->execute();
} catch(PDOException $e){
    echo 'Erro na pagina de inserção de dados na tabela dados_perfil_advogados: ' . $e->getMessage();
}
