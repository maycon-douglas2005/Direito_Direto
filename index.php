<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="public/css/index.css">
    <link rel="stylesheet" href="public/css/cabecario.css">
    <link rel="stylesheet" href="public/css/footer.css">
</head>

<body>
    <header>
    <img id="logo" src="public/img/logo_direitoDireto.png" alt="Logo">

    <div class="menu">
        <nav id="registroLogin">
            <ul>
                <a href="public/html-php/comoVoceSeIdentificaCadastro.php"><li>Cadastrar-se</li></a>
                <span> | </span>
                <a href="public/html-php/comoVoceSeIdentificaLogin.php"><li>Entrar</li></a>
            </ul>
        </nav>
        
        <nav id="menu">
            <ul>
                <a href=""><li>Página Inicial</li></a>
                <a href="index.php#sobre"><li>Sobre</li></a>
                <a href="index.php#contato"><li>Contato</li></a>
            </ul>
        </nav>

    </div>
    </header>
    <main>
        <article>
            <h1>Seja Bem Vindo!</h1>
            <p>Conheça agora a plataforma Direito Direto. <br><br>

                Aqui você pode encontrar o profissional ideal <br> para te auxiliar em suas necessidades jurídicas.
                <br><br>
                Nossa missão é fornecer um serviço de busca <br> eficiente e fácil de usar, conectando clientes a <br>
                advogados qualificados e experientes. <br><br>

                Se <a class="seCadastre" href="public/html-php/comoVoceSeIdentificaCadastro.html">cadastre</a> em nosso site!
            </p>
        </article>
        <div class="imagemCentral">
            <img class="imagemCentral" src="public/img/direitoDireto.png" alt="Imagem não encontrada">
            <div class="divRealizarBusca">
                <h2>Deseja realizar uma busca?</h2>
                <a class="divCliqueAqui" href="public/html-php/loginCliente.html">Clique Aqui</a>
            </div>
        </div>
    </main>
    <section class="sectionPqUsarNossoSite" id="sobre">
        <h1 class="pqUsarNossoSiteTitulo">Porque usar nosso site?</h1>
        <div class="linhas">
            <div class="linha1">
                <div class="retangulozinhos1">
                    <strong>
                        <h2>Praticidade e rapidez</h2>
                    </strong>
                    <div class="texto">
                        <h3>Com apenas alguns cliques,
                            você <br> pode pesquisar por
                            advogados <br> em sua região,
                            filtrando por área <br> de atuação,
                            palavras-chave e até <br> mesmo
                            avaliações de outros <br> clientes.</h3>
                    </div>
                </div>

                <div class="retangulozinhos2">
                    <strong>
                        <h2>Economia de tempo</h2>
                    </strong>
                    <div class="texto">
                        <h3>Ao utilizar um site de busca
                            de <br> advogados, você evita a <br> necessidade
                            de pesquisar em <br> listas telefônicas,
                            anúncios ou <br> indicações de amigos,
                            economizando <br> tempo e esforço.</h3>
                    </div>
                </div>
            </div>
            <div class="linha2">
                <div class="retangulozinhos3">
                    <strong>
                        <h2>Avaliações de clientes</h2>
                    </strong>
                    <div class="texto">
                        <h3>As avaliações de outros
                            clientes <br> podem ser extremamente
                            úteis <br> para avaliar a reputação e
                            o <br> profissionalismo de um advogado, <br>
                            ajudando você a tomar uma <br> decisão
                            mais informada.</h3>
                    </div>
                </div>
                <div class="retangulozinhos4">
                    <strong>
                        <h2>Conforto e segurança</h2>
                    </strong>
                    <div class="texto">
                        <h3>A busca por um advogado
                            online <br> pode ser realizada no
                            conforto da <br> sua casa, sem a
                            necessidade de <br> se deslocar para
                            diferentes <br> escritórios.</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
    <footer id="contato">
    <div class="logo">
        <img src="public/img/logo.png" alt="Direito Direto">
    </div>

    <div class="contato">
        <h2>Contato</h2>
        <div class="informacoesContato">
            <strong>Email: direito.direto.fsa@gmail.com</strong>
            <strong>Redes Sociais: </strong>
            <div class="redesSociais">
                <img src="public/img/instagram.png" alt="instagram">
                <img src="public/img/facebook.png" alt="facebook">
                <img src="public/img/linkedin.png" alt="linkedin">
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
</section>
</body>
</html>