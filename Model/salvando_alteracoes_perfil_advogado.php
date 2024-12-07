<?php
session_start();
include('config.php'); // Inclua sua configuração de conexão aqui

function estaLogado() {
    return isset($_SESSION['email']) && $_SESSION['senha'];
}

if (estaLogado() && $_SERVER['REQUEST_METHOD'] === 'POST') {

    $summary = $_POST['summary'];
    $service1 = $_POST['service1'];
    $service2 = $_POST['service2'];
    $service3 = $_POST['service3'];

    $atualizarDadosPerfil = $conexao->prepare("UPDATE dados_perfil_advogado SET resumo_profissional = :summary, especialidade_1 = :service1, especialidade_2 = :service2, especialidade_3 = :service3 WHERE id = :id");
    $atualizarDadosPerfil->bindParam(':summary', $summary);
    $atualizarDadosPerfil->bindParam(':service1', $service1);
    $atualizarDadosPerfil->bindParam(':service2', $service2);
    $atualizarDadosPerfil->bindParam(':service3', $service3);
    $atualizarDadosPerfil->bindParam(':id', $_SESSION['id']); 

    if ($atualizarDadosPerfil->execute()) { ?>
        <script>
            alert('Dados alterados com sucesso!')
        </script>
    <?php
    } else {?>
        <script>
            alert('Erro ao alterar dados!')
        </script>
    <?php
    }
} else {?>
        <script>
            alert('Acesso negado!')
        </script>
    <?php } ?>

