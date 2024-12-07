<?php
include('config.php');
session_start();

if (!isset($_SESSION['email']) && !isset($_SESSION['senha'])) {
    header('Location: login.php');
    exit();
}

$id = $_SESSION['idDoAdvSegundoLogin'];
$tipo = $_POST['tipo'];
$imagem = $_FILES['imagem'];

echo 'upload_imagem';
/*
$diretorio = "../public/fotos_alteradas/";
$caminhoImagem = $diretorio . $imagem["name"];

if (move_uploaded_file($imagem["tmp_name"], $caminhoImagem)) {
    if ($tipo == "fundo") {
        $sql = "UPDATE advogados SET imagem_fundo = :imagem WHERE id_advogado = :id";
        echo json_encode([
            'success' => true,
            'novoNome' => $caminhoImagem
        ]);
    } elseif($tipo != 'fundo') {
        $sql = "UPDATE advogados SET imagem = :imagem WHERE id_advogado = :id";
    } else{
        echo json_encode([
            'success' => false,
            'error' => 'Erro ao fazer upload da imagem'
        ]);
    }

    $atualizaImagem = $conexao->prepare($sql);
    $atualizaImagem->bindParam(':imagem', $caminhoImagem);
    $atualizaImagem->bindParam(':id', $id, PDO::PARAM_INT);

    if ($atualizaImagem->execute()) {
        echo "Imagem atualizada com sucesso!";
    } else {
        echo "Erro ao atualizar a imagem no banco de dados.";
    }
} else {
    echo "Erro ao fazer upload da imagem.";
}
?>
