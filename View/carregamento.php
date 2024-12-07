<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Fonte de texto do site-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">    

    <!--CSS-->
    <link rel="stylesheet" href="../public/css/header.css">
    <link rel="stylesheet" href="../public/css/carregamento.css">

    <title>Busca</title>
</head>
<body>
    <?php include('../view/partials/header.php')?>
        
    <main>
        <section class="carregamento-container">
            <h1>Cadastro Realizado!</h1>
            <h3>Estamos te redirecionando, por favor aguarde.</h3>
            <div>
                <div class="wrapper">
                    <div class="circle"></div>
                    <div class="circle2"></div>
                    <div class="circle3"></div>
                </div>
            </div>
        </section>
    </main>

    <script src="../public/javascript/menu.js"></script>

    <!--Acessibilidade Libras-->
    <?php include('../View/include/libras.php')?>
</body>
</html>