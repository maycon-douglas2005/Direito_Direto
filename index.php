<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/cabecario.css">
    <link rel="stylesheet" href="public/css/index.css">
    <link rel="stylesheet" href="public/css/footerPessoaFisicaLogado.css">
    <title>Direito Direto - Página Inicial</title>
</head>
<body>
    <header>
        <img id="logo" src="public/img/logo_direitoDireto.png" alt="Logo">
    
        <div class="menu">
            <nav id="registroLogin">
                <ul>
                    <a href="public/html-php/cadastro/comoVoceSeIdentificaCadastro.php"><li>Cadastrar-se</li></a>
                    <span> | </span>
                    <a href="public/html-php/login/comoVoceSeIdentificaLogin.php"><li>Login</li></a>
                </ul>
            </nav>
            
            <nav id="menu">
                <ul >
                    <a href=""><li>Página Inicial</li></a>
                    <a href="index.php#sobre"><li>Sobre</li></a>
                    <a href="index.php#contato"><li>Contato</li></a>
                </ul>
            </nav>
    
        </div>
    </header>

    <!------------------------------------------------------------------------------>

    <main>

        <section class="boasVindas">
            <div class="sobreoSite">
                <h1>Seja bem vindo!</h1>

                <p>Conheça agora a plataforma <strong>Direito Direto.</strong></p>
                <p>Aqui você pode encontrar o profissional ideal para te auxiliar em suas necessidades jurídicas.</p>
                <p>Nossa missão é fornecer um serviço de busca eficiente e fácil de usar, conectando clientes a advogados qualificados e experientes.</p>
                <p>Se <a href="">cadastre</a> em nosso site!</p>
            </div>
            <div class="busca">
                <span>
                    <p>Deseja realizar uma busca?</p>
                    <a href="#">Clique Aqui</a>
                </span>
            </div>
        </section>

        <section class="nossoSite" id="sobre">
            <h2>Porque usar nosso site?</h2>

                <div class="cards">
                    <div class="card1">
                        <span class="title">Praticidade e rapidez</span>
                        <p>Com apenas alguns cliques, você pode pesquisar por advogados em sua região, filtrando por área de atuação, palavras-chave e até mesmo avaliações de outros clientes.</p>
                    </div>
                    <div class="card2">
                        <span class="title">Avaliações de clientes</span>
                        <p>As avaliações de outros clientes podem ser extremamente úteis para avaliar a reputação e o profissionalismo de um advogado, ajudando você a tomar uma decisão mais informada.</p>
    
                    </div>
                    <div class="card3">
                        <span class="title">Economia de tempo</span>
                        <p>Ao utilizar um site de busca de advogados, você evita a necessidade de pesquisar em listas telefônicas, anúncios ou indicações de amigos, economizando tempo e esforço.</p>
                    </div>
                    <div class="card4">
                        <span class="title">Conforto e segurança</span>
                        <p>A busca por um advogado online pode ser realizada no conforto da sua casa, sem a necessidade de se deslocar para diferentes escritórios.</p>
                    </div>
                </div>
        </section>
        <section class="perguntasFrequentes">
            <h3>Dúvidas Frequentes</h3>

            <div class="duvidasFrequentes">
                <div class="duvida1">
                    <div class="conteudo">
                        <ion-icon name="caret-forward-outline"></ion-icon>
                        <p>Como funciona a busca por advogados?</p>  
                    </div>
                    
                    <ion-icon name="chevron-down-outline"></ion-icon>
                </div>
                <div class="duvida2">
                    <div class="conteudo">
                        <ion-icon name="caret-forward-outline"></ion-icon>
                        <p>Qual a nossa politica de privacidade?</p>
                    </div>

                    <ion-icon name="chevron-down-outline"></ion-icon>
                </div>
                <div class="duvida3">
                    <div class="conteudo">
                        <ion-icon name="caret-forward-outline"></ion-icon>
                        <p>Como posso fornecer um feedback?</p>   
                    </div>
                    
                    <ion-icon name="chevron-down-outline"></ion-icon>
                </div>
                <div class="duvida4">
                    <div class="conteudo">
                        <ion-icon name="caret-forward-outline"></ion-icon>
                        <p>Quem somos nós?</p>    
                    </div>
                    
                    <ion-icon name="chevron-down-outline"></ion-icon>
                </div>
            </div>
        </section>
    </main>

    <!------------------------------------------------------------------------------>

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

    <!--Icones-->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>