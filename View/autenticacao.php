<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../Public/css/header.css">
    <link rel="stylesheet" href="../Public/css/autenticacao.css">

    <title>Direito Direto - Autenticação</title>
</head>
<body>
    <?php include('include/header.html'); ?>
    
    <main>
        <section class="autenticacao">
            <h1>Autenticação</h1>

            <p>Confirme o código enviado no email</p>

            <form action="../Model/verificando_token.php" method="POST">
                <fieldset>

                    <input type="text" name="token" id="num" required>

                    <label for="confirmar"></label>
                    <button type="submit" name="confirmar" id="confirmar">Confirmar</button>
                </fieldset>
            </form>
        </section>
    </main>
    <script src="../public/javascript/autenticacao.js"></script>

    <!--Acessibilidade Libras-->
    <?php include('../View/include/libras.php')?>
</body>
</html>