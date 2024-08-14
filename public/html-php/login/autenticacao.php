<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../css/cabecario.css">
    <link rel="stylesheet" href="../css/autenticacao.css">

    <title>Direito Direto - Autenticação</title>
</head>
<body>
    <?php include('../include/header.html'); ?>
    
    <main>
        <section class="autenticacao">
            <h1>Autenticação</h1>

            <p>Confirme o código enviado no email</p>

            <form action="../html/redefinirSenha.html">
                <fieldset>

                    <div class="autenticacaoCodigo">
                        <input type="text" name="num1" id="num1" required>
                        <input type="text" name="num2" id="num2" required>
                        <input type="text" name="num3" id="num3" required>
                        <input type="text" name="num4" id="num4" required>
                        <input type="text" name="num5" id="num5" required>
                    </div>

                    <label for="confirmar"></label>
                    <button type="submit" name="confirmar" id="confirmar">Confirmar</button>
                </fieldset>
            </form>
        </section>
    </main>
    <script src="../javascript/autenticacao.js"></script>
</body>
</html>