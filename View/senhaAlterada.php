<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senha Alterada!</title>
    <link rel="stylesheet" href="../public/css/header.css">
    <link rel="stylesheet" href="../public/css/carregamento.css">
</head>
<body onload="redirecionando()">
<?php include('include/header.html'); ?>
    <section>
        <h1>Senha alterada com sucesso!</h1>
        <h3>Estamos te redirecionando, por favor aguarde.</h3>
        <div>    
            <div class="wrapper">
                <div class="circle"></div>
                <div class="circle2"></div>
                <div class="circle3"></div>
                <div class="shadow"></div>
                <div class="shadow"></div>
                <div class="shadow"></div>
            </div>
        </div>
    </section>
    <script>
        function redirecionando(){
            setTimeout(function (){
                window.location.href = 'login.php';
            }, 3500);   
        }
    </script>

    <!--Acessibilidade Libras-->
    <?php include('include/libras.php')?>
</body>
</html>