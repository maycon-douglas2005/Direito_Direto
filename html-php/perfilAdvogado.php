<?php include("/include/formularioLoginAdvogado.php") ?>
<?php include("/include/headerUsuarioLogado.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/cabecario.css"> 
    <link rel="stylesheet" href="../css/perfilAdvogado.css">

    <title>Direito Direto - Perfil</title>
</head>
<body>

    <section class="perfilAdvogado">
        <div class="capaFundo"></div>
        <div class="fotoPerfil"></div>
        <div class="informacoesAdvogado">
            <div class="informacoesPessoais">
                <p><Strong>Nome: </Strong>nomeUsuario</p>
                <p><strong>Idade: </strong>idadeUsuario</p>
                <p><strong>Número da OAB: </strong>numeroOAB</p>
                <p><strong>Modelo de Trabalho: </strong>modeloTrabalhoAdvogado</p>
            </div>
            <div class="feedbackVisual">
                <p><strong>Redes Sociais: </strong>* * * *</p>
                <p><strong>Casos Resolvidos: </strong>numeroCasos</p>
                <p><Strong>Média de Avaliações: </Strong>notaEstrela</p>
            </div>
        </div>
    </section>

    <section class="resumoProfissional"></section>
    <section class="avaliacoes"></section>
</body>
</html>