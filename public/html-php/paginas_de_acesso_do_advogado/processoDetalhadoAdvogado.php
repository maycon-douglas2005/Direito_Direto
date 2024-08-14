<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/cabecario.css">
    <link rel="stylesheet" href="../css/processoDetalhadoAdvogado.css">

    <title>Direito Direto - Processo</title>
</head>
<body>
    <?php include('../include/header.html');?>
    <main>
        <section class="processoDetalhado">
            <div class="titulo">
                <h1>Histórico do processo</h1>
            </div>

            <form action="#" method="post">
                <label for="mensagem" hidden></label>
                <textarea name="mensagem" id="mensagem" placeholder="Pressione enter para enviar a mensagem..."></textarea>

                <button type="submit" hidden></button>
            </form>
        </section>
        <section class="feedbackVisualProcesso">
            <div class="visaoGeral">
                <h2>Visão geral do processo</h2>
            </div>
            <div class="progresso">
                <p class="pedido">#7645</p>
                <div class="etapas">
                    <p class="etapa1"></p>
                    <strong class="etapa1"></strong>
                    <p class="etapa2"></p>
                    <strong class="etapa2"></strong>
                    <p class="etapa3"></p>
                    <strong class="etapa3"></strong>
                    <p class="etapa4"></p>
                    <strong class="etapa4"></strong>
                </div>
            </div>
        </section>
    </main>
</body>
</html>