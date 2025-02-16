<?php
include('../Model/config.php');


$email = $_POST['email'];
$especialidade = $_POST['especialidade'];


try{
$verificando_id_do_advogado = $conexao->prepare('SELECT id FROM advogados WHERE `e-mail` = :email');

$verificando_id_do_advogado->bindParam(':email', $email);

$verificando_id_do_advogado->execute();

$id = $verificando_id_do_advogado->fetchColumn();


header("Location: ../Model/insert_in_table_dadosPerfilAdvogados.php?id=$id&especialidade=$especialidade");

} catch(PDOException $e){
    echo 'Erro no arquivo "get_info_id_and_specialization.php": ' . $e;
}
