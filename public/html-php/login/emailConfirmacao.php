<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/cabecario.css">
    <link rel="stylesheet" href="../css/emailConfirmacao.css">

    <title>Document</title>
</head>
<body>
    <?php include('../include/header.html');?>
    <main>
        <section>
            <form action="../html/autenticacao.html">
                <fieldset>
                    <legend>Digite seu email</legend>

                    <div class="valorEmail">
                        <label for="email">Enviaremos um código de confirmação</label>
                        <input type="text" name="email" id="email" required>
                    </div>

                    <button type="submit" id="confirmar">Confirmar</button>
                </fieldset>
            </form>
        </section>
    </main>
</body>
</html>