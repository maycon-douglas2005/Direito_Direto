<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/footer.css">
</head>
<body>
<footer id="contato">
    <div class="logo">
        <img src="../img/logo.png" alt="Direito Direto">
    </div>

    <div class="contato">
        <h2>Contato</h2>
        <div class="informacoesContato">
            <strong>Email: direito.direto.fsa@gmail.com</strong>
            <strong>Redes Sociais: </strong>
            <div class="redesSociais">
                <img src="../img/instagram.png" alt="instagram">
                <img src="../img/facebook.png" alt="facebook">
                <img src="../img/linkedin.png" alt="linkedin">
            </div>
        </div>
    </div>

    <div class="feedback">
        <form action="#" method="post">
            <fieldset>
                <legend><strong>Feedback</strong></legend>

                    <div class="nomeeCidade">
                        <div class="nome">
                            <label for="nome">Nome: </label>
                            <input type="text" name="nome" id="nome">
                        </div>
    
                        <div class="cidade">
                            <label for="cidade">Cidade: </label>
                            <input type="text" name="cidade" id="cidade">
                        </div>
                    </div>

                    <div class="emaileTelefone">
                        <div class="email">
                            <label for="email">Email: </label>
                            <input type="email" name="email" id="email">
                        </div>
    
                        <div class="telefone">
                            <label for="telefone">Telefone: </label>
                            <input type="number" name="telefone" id="telefone">
                        </div>
                    </div>


                <div class="mensagem">
                    <label for="mensagem">Mensagem: </label>
                    <textarea name="mensagem" id="mensagem"></textarea>
                    
                    <button type="submit">Enviar</button>
                </div>

               </fieldset>
        </form>
    </div>
</footer>
</body>
</html>
