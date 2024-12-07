<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../public/css/header.css">
    <link rel="stylesheet" href="../public/css/contato.css">


    <title>Direito Direto - Contato</title>
</head>
<body>
    <?php include('include/header.html')?>

    <main>
        <section class="container">


            <section class="contato-container">
                    <div class="localizacao">
                        <h2>Localização</h2>
            
                        <div class="endereco">
                            <p>Av. Príncipe de Gales, 821 - Vila Príncipe de Gales, Santo André - SP, 09060-650</p>
                        </div>
                    </div>

                    <p><strong>Email: </strong>direitodireto.online@gmail.com</p>

                    <div class="seguidor">
                        <strong>Siga-nos</strong>
        
                        <div class="redesSociais">
                            <a href="#"><img src="../public/img/instagram.png" alt="instagram"></a>
                            <a href="#"><img src="../public/img/facebook.png" alt="facebook"></a>
                            <a href="#"><img src="../public/img/linkedin.png" alt="linkedin"></a>
                        </div>
                    </div>
            </section>


            <section class="feedback-container">
                <form action="#" method="post">
                    <fieldset>
                        <legend>Feedback</legend>
                        
                        <p>Escreva para a gente, sua opinião é importante para nós.</p>

                        <input type="text" name="usuario" id="usuario" placeholder="Insira seu Nome">
                        <input type="email" name="email" id="email" placeholder="Insira seu Email">
                        <textarea name="mensagem" id="mensagem" placeholder="Escreva uma mensagem.."></textarea>

                        <button id="Btn_enviar">Enviar</button>


                    </fieldset>
                </form>

            </section>
        </section>
    </main>

    <script>
        let botaoEnviar = document.querySelector('#Btn_enviar')

        botaoEnviar.addEventListener('click', function sucesso_no_envio_do_feedback() {
            alert('Feedback enviado com sucesso. Obrigado!')
        })
    </script>
    <script src="../public/javascript/menu.js"></script>
    <?php include('../View/include/libras.php')?>
</body>
</html>