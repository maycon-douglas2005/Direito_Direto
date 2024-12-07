<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../public/css/header.css">
    <link rel="stylesheet" href="../public/css/faq.css">

    <title>Direito Direto - Login</title>
</head>

<body>
    <?php include('include/header.html') ?>

    <main>

        <section class="container">
            <section class="faq-container">
                <h1>F.A.Q</h1>

                <div>
                    <details open class="duvida">
                        <summary>O que é o Direito Direto?</summary>
                        <p>O Direito Direto é uma plataforma online que conecta você aos melhores advogados do Brasil, de forma rápida e fácil. 
                            Com apenas alguns cliques, você encontra o profissional ideal para te ajudar com qualquer questão jurídica.</p>
                    </details>

                    <details open class="duvida">
                        <summary>Como funciona a busca por um advogado?</summary>
                        <p>
                            Nossa plataforma permite que você encontre o advogado ideal para a sua necessidade de forma 
                            rápida e fácil. Basta informar a área do direito, a sua localização e outros critérios de busca. 
                            Os resultados serão exibidos de acordo com a sua pesquisa.
                        </p>
                    </details open class="duvida">

                    <details open class="duvida">
                        <summary>Como encontro um advogado adequado para o meu caso?</summary>
                        <p>
                            Para encontrar um advogado adequado, acesse a tela de busca após o login como cliente. Utilize filtros relacionados 
                            ao tipo de assistência jurídica que você precisa, como especialidade, localização. Nossa plataforma irá mostrar uma  
                            lista de advogados que correspondem aos seus critérios.
                        </p>
                    </details>

                    <details open class="duvida">
                        <summary>Como posso entrar em contato com um advogado?</summary>
                        <p>
                            Você pode entrar em contato com o advogado diretamente através dos dados de contato disponíveis em seu perfil.
                        </p>
                    </details>
    
                    <details open>
                        <summary>A plataforma é segura?</summary>
                        <p>Sim, a segurança dos seus dados é nossa prioridade. Utilizamos as mais modernas tecnologias de segurança para proteger
                             suas informações pessoais.</p>
                    </details>

                </div>

        </section>
    </main>

    <script src="../public/javascript/menu.js"></script>

    <!--Acessibilidade Libras-->
    <?php include('../View/include/libras.php') ?>
</body>

</html>