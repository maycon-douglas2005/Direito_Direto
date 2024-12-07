<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../public/css/header.css">
    <link rel="stylesheet" href="../public/css/redefinirSenha.css">

    <title>Direito Direto - Redefinir Senha</title>
</head>
<body>
    <?php include('include/header.html');?>
    <main>
        <section>
            <form action="../Model/alterandoSenha.php" method="post">
                <fieldset>
                    <legend>Digite sua nova senha</legend>

                    <div class="senhaNova">
                        <label for="senhaNova">Senha nova:</label>
                        <input type="password" name="senhaNova" id="senhaNova" required>
                    </div>

                    <div class="requisitosSenha">
                        <p class="minimo">• Mínimo 8 caracteres</p>
                        <p class="maiusculo">• Possui primeira letra maiúscula</p>
                        <p class="caractere">• Possui 1 caractere especial</p>
                    </div>

                    <div class="repetirSenha">
                        <label for="repetirSenha">Repita a senha:</label>
                        <input type="password" name="repetirSenha" id="repetirSenha" required>
                    </div>

                    <button type="submit" id="confirmar">Confirmar</button>
                </fieldset>
            </form>
        </section>
    </main>
    <script src="../public/javascript/validaSenha.js"></script>

    <!--Acessibilidade Libras-->
    <?php include('../View/include/libras.php')?>
</body>

</html>