<?php
    session_start();
    if((isset($_SESSION['emailAdvogado']) || (isset($_SESSION['emailCliente']) == true) and (isset($_SESSION['senhaAdvogado']) || (isset($_SESSION['senhaCliente']) == true)))){
        //se estiver logado ira para a pagina perfilAdvogado corretamente
    } else{
        //caso contrario ira para a pagina de loginAdvogado
        unset($_SESSION['emailAdvogado']);
        unset($_SESSION['senhaAdvogado']);
        header('Location: loginAdvogado.html');
    }

?>
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
    <header>
        <img id="logo" src="../img/logo_direitoDireto.png" alt="Logo">

        <div class="menu">
            <nav id="registroLogin">
                <ul >
                    <a href="comoVoceSeIdentificaCadastro.html"><li>Cadastrar-se</li></a>
                    <span> | </span>
                    <a href="comoVoceSeIdentificaLogin.html"><li>Login</li></a>
                    <span> | </span>
                    <a href="../bd/encerrarSessaoAdvogado.php"><li>Sair</li></a>
                </ul>
            </nav>

            <nav id="menu">
                <ul >
                    <a href="../index.html"><li>Página Inicial</li></a>
                    <a href="http://"><li>Busca</li></a>
                    <a href="http://"><li>Sobre</li></a>
                </ul>
            </nav>
        </div>           
    </header>

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