<?php
include('config.php');
session_start();

try{
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $comentario = $_POST['comentario'];
        $emailDoCliente = $_SESSION['email'];    
        $idDoAdvogado = $_SESSION['id'];
        $idDoCliente = $_SESSION['idDoCliente'];
        $nomeDoCliente = $_SESSION['nomeDoCliente'];
        $fotoPerfil = $_SESSION['foto_de_perfil_cliente'];

        $inserindo_comentario_no_bd = $conexao->prepare("INSERT avaliacoes (id_advogado, id_cliente, nome, comentario, imagem) 
        VALUES (:id_advogado, :id_cliente, :nomeCliente, :comentario, :imagem)");
        $inserindo_comentario_no_bd->bindParam(':id_advogado', $idDoAdvogado);
        $inserindo_comentario_no_bd->bindParam(':id_cliente', $idDoCliente);
        $inserindo_comentario_no_bd->bindParam(':nomeCliente', $nomeDoCliente);
        $inserindo_comentario_no_bd->bindParam(':comentario', $comentario);
        $inserindo_comentario_no_bd->bindParam(':imagem', $fotoPerfil);
        $inserindo_comentario_no_bd->execute();


        if($inserindo_comentario_no_bd->execute()){
            header('Location: ../View/perfilAdvogado.php?id=' . $idDoAdvogado);
        } 
    }
} catch(Exception $e){
    echo 'Erro: ' . $e;
}