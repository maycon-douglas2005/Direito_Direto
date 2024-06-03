<?php
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <header>
        <img class="logo" src="../img/logo.png" alt="Logo">
        <nav class="link1">
            <a href="comoVoceSeIdentificaCadastro.html">Cadastrar-se | </a>
            <a href="comoVoceSeIdentificaLogin.html">Login</a>
        </nav>
        <nav class="link2">
            <a href="../index.html">Página Inicial | </a>
            <a href="">Busca | </a>
            <a href="">Sobre</a>
        </nav>
    </header>
    <main>
        <article>
            <h1>Login</h1>
            <h2>Use uma conta para fazer logon</h2>
            <form action="" method="POST">
                <div class="email">
                    <label for="emailAdvogado">Endereço de e-mail: </label><br>
                    <input class="email" type="email" name="emailAdvogado" size="30%">
                </div>
                <div class="senha">
                    <label for="senhaAdvogado">Senha: </label><br>
                    <input class="senha" type="password" name="senhaAdvogado" size="30%">
                </div>
                <div class="lembrarMe">
                    <input  type="checkbox" name="lembrarMe"> Lembrar-me?
                </div>
                <div class="divBotaoEnviar">
                    <input class="botaoEnviar" type="submit" value="Entrar">
                </div>
            </form>
        </article>
    </main>
</body>
</html>