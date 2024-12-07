<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../public/css/header.css">
    <link rel="stylesheet" href="../public/css/login.css">

    <title>Direito Direto - Login</title>
</head>
    <body>
        <?php include('include/header.html')?>

        <main>
            <section class="login-container">
                <h1>Login</h1>

                <form action="../Model/sistemaLogin.php" method="POST">
                    <fieldset>
                        <legend>Use uma conta para se conectar</legend>

                        <div class="usuarioEmail">
                            <label for="email">Endereço de e-mail:</label>
                            <input type="email" name="email" id="email">
                        </div>

                        <div class="usuarioSenha">
                            <label for="senha">Senha:</label>
                            <input type="password" name="senha" id="senha">
                        </div>

                        <div class="lembrarMe">
                            <input type="checkbox" name="lembrarMe" id="lembrarMe">
                            <p>Deseja lembrá-lo?</p>
                        </div>

                        <button type="submit">Conectar-se</button>
                    </fieldset>
                    
                    <div class="opcoes">
                        <a href="cadastro.php">Não tem uma conta?</a>
                        <a href="emailConfirmacao.php">Esqueceu sua senha?</a>
                    </div>
                    
                </form>
            </section>
        </main>

        <script src="../public/javascript/menu.js"></script>

        <!--Acessibilidade Libras-->
    <?php include('../View/include/libras.php')?>
    </body>  
</html>