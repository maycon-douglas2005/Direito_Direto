<?php
include('../Model/config.php');
session_start();

$email = $_SESSION['email'];


$imagem = '../public/fotos_de_perfis_dos_advogados/' . $_FILES['imagem']['name'];
move_uploaded_file($_FILES['imagem']['tmp_name'], $imagem);

$atualizandoFotoFundo = $conexao->prepare('UPDATE advogados SET imagem = :imagem WHERE `e-mail` = :email');
$atualizandoFotoFundo->bindParam(':imagem', $imagem);
$atualizandoFotoFundo->bindParam(':email', $email);
$atualizandoFotoFundo->execute();


