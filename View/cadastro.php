<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../public/css/header.css">
    <link rel="stylesheet" href="../public/css/registro.css">

    <title>Direito Direto - Registrar</title>
</head>
    <body>
        <?php include('include/header.html'); ?>

        <main>
            <section class="registro-container">
                
                <form action="#">
                    <fieldset>
                        <h1>Como você se identifica?</h1>
                        
                        <div class="opcao">
                            <div class="escolhas">
                                <a href="cadastroCliente.php">Cliente</a>
                            </div>
                            <div class="escolhas">
                                <a href="cadastroAdvogado.php">Advogado</a>
                            </div>
                        </div>     
                    </fieldset>
                </form>
            </section>
        </main>

        <script src="../public/javascript/menu.js"></script>

        <!--Acessibilidade Libras-->
        <?php include('../View/include/libras.php')?>
    </body>  
</html>