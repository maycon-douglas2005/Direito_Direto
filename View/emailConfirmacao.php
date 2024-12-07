<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redefinir Senha</title>
    <link rel="stylesheet" href="../Public/css/header.css">
    <link rel="stylesheet" href="../Public/css/emailConfirmacao.css">

    <title>Document</title>
</head>

<body>
    <?php include('include/header.html');?>
    <main>
        <section>
            <form action="http://localhost:3000/enviar-token" method='POST'>
                <fieldset>
                    <legend>Digite seu email</legend>

                    <div class="valorEmail">
                        <label for="email">Enviaremos um código de confirmação</label>
                        <input type="text" name="email" id="email" required>
                        <span style="display: none;">E-mail fornecido não está cadastrado!</span>
                    </div>

                    <button type="submit" id="confirmar">Confirmar</button>
                </fieldset>
            </form>

            <?php 
                // alert que aparecerá se o e-mail fornecido não estiver cadastrado

                if(isset($_GET['email_nao_cadastrado'])){ ?>
                    <script>
                        alert('O e-mail fornecido não está cadastrado!')
                    </script>  
            <?php } ?>
            
        </section>
    </main>

    <!--Acessibilidade Libras-->
    <?php include('../View/include/libras.php')?>
</body>

</html>