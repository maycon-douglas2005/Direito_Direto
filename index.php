<?php
  include('Model/config.php');
  session_start();


  if(isset($_SESSION['email']) && isset($_SESSION['senha'])){
    $emailLogado = $_SESSION['email'];
    $senhaLogada = $_SESSION['senha'];
    
    $verificando_se_usuario_logado_é_cliente = $conexao->prepare('SELECT * FROM clientes WHERE `e-mail` = :email AND senha = :senha');
    $verificando_se_usuario_logado_é_cliente->bindParam(':email', $emailLogado);
    $verificando_se_usuario_logado_é_cliente->bindParam(':senha', $senhaLogada);
    $verificando_se_usuario_logado_é_cliente->execute();

    if($verificando_se_usuario_logado_é_cliente->rowCount() > 0){
      $_SESSION['cliente_logado'] = true;
    } else {
      $_SESSION['advogado_logado'] = true;
    }
  }


  

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="public/css/header.css">
    <link rel="stylesheet" href="public/css/paginaInicial.css">
    <link rel="stylesheet" href="public/css/footer.css">

    <title>Direito Direto - Página Inicial</title>
</head>

<body>
    <?php 
    if(isset($_SESSION['cliente_logado'])){
      include('View/include/include_para_index.php/headerUsuarioLogadoCliente.php');
    } elseif(isset($_SESSION['advogado_logado'])){
      include('View/include/include_para_index.php/headerUsuarioLogadoAdvogado.php');
    } else {
      include('View/include/include_para_index.php/headerUsuarioDeslogado.php');
    }
    
    ?>

    <!------------------------------------------------------------------------------>

    <div class="modal">
      <div class="modal-container">
        
        <div id="myModal">
    
          <div class="modal-content">
            <h1>Politica de privacidade</h1>
            <div class="introducao">
              <p>Na DIREITO DIRETO, privacidade e segurança são prioridades e nos comprometemos com a transparência do tratamento de dados pessoais dos nossos clientes/advogados. Por isso, esta presente Política de Privacidade estabelece como é feita a coleta, uso e transferência de informações de clientes ou outras pessoas que acessam ou usam nosso site.
              Ao utilizar nossos serviços, você entende que coletaremos e usaremos suas informações pessoais nas formas descritas nesta Política, sob as normas da Constituição Federal de 1988 (art. 5º, LXXIX; e o art. 22º, XXX – incluídos pela EC 115/2022), das normas de Proteção de Dados (LGPD, Lei Federal 13.709/2018), das disposições consumeristas da Lei Federal 8078/1990 e as demais normas do ordenamento jurídico brasileiro aplicáveis.
              Dessa forma, a DIREITO DIRETO, obriga-se ao disposto na presente Política de Privacidade.
              </p>
            </div>
            
            <div class="titulo1">
                    <strong>
                      1. Quais dados coletamos sobre você?
                    </strong>
                    <p>
                      Nosso site coleta e utiliza alguns dados pessoais seus, de forma a viabilizar a prestação de serviços e aprimorar a experiência de uso.
                    </p>
            </div>
            <div class="subtitulo1">
                    <strong>
                      1.1 Dados pessoais fornecidos pelo cliente
                    </strong>
                    <ul>
                      <li>• Nome completo</li>
                      <li>• Cidade onde mora</li>
                      <li>• Estado onde mora</li>
                      <li>• Número de celular</li>
                      <li>• E-mail</li>
                    </ul>
            </div>
            <div class="subtitulo2">
                    <strong>
                      1.2 Dados pessoais e profissionais fornecidos pelo advogado
                    </strong>
                    <ul>
                      <li>• Nome completo</li>
                      <li>• Cidade onde mora</li>
                      <li>• Estado onde mora</li>
                      <li>• Número de celular</li>
                      <li>• Carteira da OAB</li>
                      <li>• Modelo de trabalho (Presencial/Online/Híbrido)</li>
                      <li>• E-mail</li>
                    </ul>
            </div>
            <div class="titulo2">
                    <strong>
                      2. Como coletamos os seus dados?
                    </strong>
                    <p>
                      Nesse sentido, a coleta dos seus dados pessoais ocorre da seguinte forma:
                    </p>
                    <ul>
                      <li>• Formulário de Cadastro</li>
                    </ul>
            </div>
            <div class="titulo3">
                    <strong>
                      3. Quais são os seus direitos?
                    </strong>
                    <p>
                      A DIREITO DIRETO assegura a seus clientes/advogados seus direitos de titular previstos no artigo 18 da Lei Geral de Proteção de Dados. Dessa forma, você pode, de maneira gratuita e a qualquer tempo:
                    </p>
                    <ul>
                      <li>• <strong>Confirmar a existência de tratamento de dados, </strong>de maneira simplificada ou em formato claro e completo.</li>
                      <li>• <strong>Acessar seus dados,</strong> podendo solicitá-los em uma cópia legível sob forma impressa ou por meio eletrônico, seguro e idôneo.</li>
                      <li>• <strong>Corrigir seus dados,</strong> ao solicitar a edição, correção ou atualização destes.</li>
                      <li>• <strong>Eliminar seus dados</strong> tratados a partir de seu consentimento, exceto nos casos previstos em lei.</li>
                    </ul>
            </div>
            <div class="titulo4">
                    <strong>
                      4. Como você pode exercer seus direitos de titular?
                    </strong>
                    <p>
                      Para exercer seus direitos de titular, você deve entrar em contato com a DIREITO DIRETO através dos seguintes meios disponíveis:
                    </p>
                    <ul>
                      <li>• E-mail: direitodireto@gmail.com</li>
                      <li>• Instagram: direito.direto</li>
                    </ul>
            </div>
            <div class="titulo5">
                    <strong>
                      5. Como e por quanto tempo seus dados serão armazenados?
                    </strong>
                    <p>
                      Seus dados pessoais coletados pela DIREITO DIRETO serão utilizados e armazenados durante o tempo necessário para a prestação do serviço ou para que as finalidades elencadas na presente Política de Privacidade sejam atingidas, considerando os direitos dos titulares dos dados e dos controladores. De modo geral, seus dados serão mantidos enquanto a relação entre você e a DIREITO  DIRETO perdurar. 
                    </p>
            </div>
            <div class="titulo6">
                    <strong>
                      6. O que fazemos para manter seus dados seguros?
                    </strong>
                    <p>
                      Para mantermos suas informações pessoais seguras, usamos ferramentas físicas, eletrônicas e gerenciais orientadas para a proteção da sua privacidade.
                      Aplicamos essas ferramentas levando em consideração a natureza dos dados pessoais coletados, o contexto e a finalidade do tratamento e os riscos que eventuais violações gerariam para os direitos e liberdades do titular dos dados coletados e tratados.
                    </p>
                    <p>
                      Entre as medidas que adotamos, destacamos as seguintes:
                    </p>
                    <ul>
                      <li>• Apenas pessoas autorizadas têm acesso a seus dados pessoais</li>
                      <li>• O acesso a seus dados pessoais é feito somente após o compromisso de confidencialidade</li>
                      <li>• Seus dados pessoais são armazenados em ambiente seguro e idôneo. A DIREITO DIRETO se compromete a adotar as melhores posturas para evitar incidentes de segurança. Contudo, é necessário destacar que nenhuma página virtual é inteiramente segura e livre de riscos. É possível que, apesar de todos os nossos protocolos de segurança, problemas de culpa exclusivamente de terceiros ocorram, como ataques cibernéticos de hackers, ou também em decorrência da negligência ou imprudência do próprio usuário/cliente. Em caso de incidentes de segurança que possa gerar risco ou dano relevante para você ou qualquer um de nossos clientes/advogados, comunicaremos aos afetados e a Autoridade Nacional de Proteção de Dados sobre o ocorrido, em consonância com as disposições da Lei Geral de Proteção de Dados.</li>
                    </ul>
            </div>
            <div class="titulo7">
                    <strong>
                      7. Com quem seus dados podem ser compartilhados?
                    </strong>
                    <p>
                      Tendo em vista a preservação de sua privacidade, a (nome empresarial simplificado) não compartilhará seus dados pessoais com nenhum terceiro não autorizado. 
                    </p>
                    <p>
                      Se você é um cliente, seus dados poderão ser compartilhados apenas com o advogado contratado. Se você for um advogado, seus dados profissionais como modelo de trabalho, local onde trabalha, área de atuação poderão ser compartilhados com o seu cliente em questão.
                    </p>
                    <p>
                      Estes recebem seus dados apenas na medida do necessário para a prestação dos serviços contratados e nossos contratos são orientados pelas normas de proteção de dados do ordenamento jurídico brasileiro.
                    </p>
                    <p>
                      Além disso, também existem outras hipóteses em que seus dados poderão ser compartilhados, que são:
                    </p>
                    <p>
                      I – Determinação legal, requerimento, requisição ou ordem judicial, com autoridades judiciais, administrativas ou governamentais competentes.
                    </p>
                    <p>
                      II – Proteção dos direitos da (nome empresarial simplificado) em qualquer tipo de conflito, inclusive os de teor judicial.
                    </p>
            </div>
        </div>
    
          <form action="#">
                  <div class="termo">
                    <label for="checkbox">Aceito os termos e condições</label>
                    <input type="checkbox" id="checkbox" name="checkbox">
                  </div>
                  <button class="close-btn" id="closeModalBtn" type="submit">Aceitar</button>
          </form>
        </div>
      </div>
      
    </div>
        
    
    <main>

        <section class="boasVindas">
            <div class="sobreoSite">
                <h1>Direito Direto</h1>

                <p>
                  Conheça agora a plataforma <strong>Direito Direto.</strong> uma plataforma onde você pode encontrar o profissional 
                  ideal para te auxiliar em suas necessidades jurídicas. Nossa missão é oferecer uma busca rápida e eficiente, 
                  ligando clientes a profissionais qualificados.
                </p>
                <p>Se <a href="View/cadastro.php">cadastre</a> em nosso site!</p>
            </div>
            <div class="busca">
                <span>
                    <p>Deseja realizar uma busca?</p>
                    <a href="View/login.php">Clique aqui</a>
                </span>
            </div>
        </section>

        <!------------------------------------------------------------------------------>

        <section class="nossoSite">
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

    <!------------------------------------------------------------------------------>

        <section class="feedback-container">
          <h3>Feedback</h3>

          <div class="feedback">
              <p>Sua opnião é importante para nós</p>
              <a href="View/contato.php">Deixe seu feedback</a>
          </div>
        </section>

    <!------------------------------------------------------------------------------>
    <footer id="contato">
        <div class="logo">
            <img src="public/img/logo.png" alt="Direito Direto">
        </div>
    
        <div class="contato">
            <h2>Contato</h2>
            <div class="informacoesContato">
                <strong>Email: direitodireto.online@gmail.com</strong>
                <strong>Redes Sociais: </strong>
                <div class="redesSociais">
                    <img src="public/img/instagram.png" alt="instagram">
                    <img src="public/img/facebook.png" alt="facebook">
                    <img src="public/img/linkedin.png" alt="linkedin">
                </div>
            </div>
        </div>
    </footer>  

    </main>

    <!--Icones-->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!--Lógica-->
    <script src="public/javascript/menu.js"></script>
    <script src="public/javascript/modal.js"></script>

    <!--Acessibilidade Libras-->
    <?php include('View/include/libras.php')?>

</body>
</html>