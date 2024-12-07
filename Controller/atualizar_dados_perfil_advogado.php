<?php
include('../Model/config.php');
session_start();

if (!isset($_SESSION['email']) && !isset($_SESSION['senha'])) {
    header('Location: login.php');
    exit();
}

$id = $_SESSION['idDoAdvSegundoLogin'];
$resumo_profissional = $_POST['resumo_profissional'];
$especialidade_1 = $_POST['especialidade_1'];
$especialidade_2 = $_POST['especialidade_2'];
$especialidade_3 = $_POST['especialidade_3'];

$atualizaPerfil = $conexao->prepare('UPDATE dados_perfil_advogado SET resumo_profissional = :resumo_profissional, especialidade_1 = :especialidade_1, especialidade_2 = :especialidade_2, especialidade_3 = :especialidade_3 WHERE id_advogado = :id');
$atualizaPerfil->bindParam(':resumo_profissional', $resumo_profissional);
$atualizaPerfil->bindParam(':especialidade_1', $especialidade_1);
$atualizaPerfil->bindParam(':especialidade_2', $especialidade_2);
$atualizaPerfil->bindParam(':especialidade_3', $especialidade_3);
$atualizaPerfil->bindParam(':id', $id, PDO::PARAM_INT);

if ($atualizaPerfil->execute()) {
    echo 'Dados atualizados com sucesso!';
} else {
    echo 'Erro ao atualizar os dados.';
}
?>
