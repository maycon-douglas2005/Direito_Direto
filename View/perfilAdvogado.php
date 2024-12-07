<?php 
    include('../Model/config.php');
    session_start();
    // Verificando se a pessoa está logada, caso contrário, não poderá continuar a pagina.
        
        if(!isset($_SESSION['email']) && !isset($_SESSION['senha']) ){
                /*se o usuario estiver logado e consequentemente com uma sessão iniciada, 
                poderá continuar na página atual, caso contrário sera redireionada
                para a página de login, impedindo que alguem acesse essa pagina sem 
                possuir um cadastro/login.
                */ 
                header('Location: login.php');
                exit(); 
        } 
     
    
        $emailAdvogado = $_SESSION['email'];
        $senhaAdvogado = $_SESSION['senha'];
        $verificacaoDeLogin = $conexao->prepare('SELECT * FROM advogados WHERE `e-mail` = :email AND senha = :senha');
        $verificacaoDeLogin->bindParam(':email', $emailAdvogado);
        $verificacaoDeLogin->bindParam(':senha', $senhaAdvogado);
        $verificacaoDeLogin->execute();
        
        function estaLogado(){
            global $verificacaoDeLogin;
            return $verificacaoDeLogin->rowCount() > 0;
        }


    
    // Pegando id do advogado para mostrar seus dados

        if(isset($_SESSION['idDoAdvSegundoLogin'])){
            $id = $_SESSION['idDoAdvSegundoLogin'];

            $busca = $conexao->prepare('SELECT * FROM advogados WHERE id = :id');
            $busca->bindParam(':id', $id);
            $busca->execute();

            $dadosAdvogado = $busca->fetchAll(PDO::FETCH_ASSOC);

 
            // Pegando dados de perfil do advogado

            $buscaPerfil = $conexao->prepare('SELECT * FROM dados_perfil_advogado WHERE id_advogado = :id');
            $buscaPerfil->bindParam(':id', $id, PDO::PARAM_INT);
            $buscaPerfil->execute();

            $dadosPerfil = $buscaPerfil->fetchAll(PDO::FETCH_ASSOC);


        }
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $_SESSION['id'] = $id;

            $busca = $conexao->prepare('SELECT * FROM advogados WHERE id = :id');
            $busca->bindParam(':id', $id);
            $busca->execute();

            $dadosAdvogado = $busca->fetchAll(PDO::FETCH_ASSOC);    

            // Pegando dados de perfil do advogado

            $buscaPerfil = $conexao->prepare('SELECT * FROM dados_perfil_advogado WHERE id_advogado = :id');
            $buscaPerfil->bindParam(':id', $id, PDO::PARAM_INT);
            $buscaPerfil->execute();

            $dadosPerfil = $buscaPerfil->fetchAll(PDO::FETCH_ASSOC);
        }

        $emailDoAdvogado = $_SESSION['email'];
        $advogado = $conexao->prepare('SELECT * FROM advogados WHERE `e-mail` = :email');
        $advogado->bindParam(':email', $emailDoAdvogado);

        $advogado->execute();


        $Advogado = $advogado->fetchAll(PDO::FETCH_ASSOC);

        foreach($Advogado as $advogados){
            $_SESSION['nomeDoAdvogado'] = $advogados['nome'];
            $_SESSION['imagemDoAdvogado'] = $advogados['imagem'];

        }


    // pegando informações para seção de Avaliações

        $emailClienteSegundoEmail = $_SESSION['email'];
        
        $informacoes_do_cliente_para_secao_avaliacoes = $conexao->prepare('SELECT * FROM clientes WHERE `e-mail` = :email');
        $informacoes_do_cliente_para_secao_avaliacoes->bindParam(':email', $emailClienteSegundoEmail);
        $informacoes_do_cliente_para_secao_avaliacoes->execute();


        $Informacoes_Do_Cliente_Para_Secao_Avaliacoes = $informacoes_do_cliente_para_secao_avaliacoes->fetchAll(PDO::FETCH_ASSOC);

    // Pegando as avaliações do perfil do advogado para exbir na seção avaliações

        $id_do_advogado_segundo_url = $_GET['id'];
        $pegando_avaliacoes_do_perfil_advogado = $conexao->prepare('SELECT * FROM avaliacoes WHERE id_advogado = :id_advogado AND id % 2 = 1');
        $pegando_avaliacoes_do_perfil_advogado->bindParam(':id_advogado', $id_do_advogado_segundo_url);
        $pegando_avaliacoes_do_perfil_advogado->execute();

        $Pegando_avaliacoes = $pegando_avaliacoes_do_perfil_advogado->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../public/css/headerUsuarioLogado.css">
    <link rel="stylesheet" href="../public/css/perfilAdvogado.css">
    <link rel="stylesheet" href="../public/css/footer.css">
    
    <title>Direito Direto - Perfil Advogado</title>

</head>

<body>

    <?php 
        if(estaLogado()){
            include('include/headerUsuarioLogadoAdvogado.php');
        } else {
            include('include/headerUsuarioLogadoCliente.php');
        }
    ?>

    <main>
        
        <section class="perfilAdvogado">
            <div class="capaFundo" id="divFotoFundo">
                <?php foreach($dadosAdvogado as $dados){ ?>
                <img src="<?php echo $dados['imagem_fundo'] ?>" alt="capaPerfil" id="imagemFundo">
                <input type="file" id="uploadImagemFundo" style="display: none;">
            </div>
            <div class="conteiner-fotoPerfil">
                <div class="fotoPerfil">
                    <img src="<?php echo $dados['imagem'] ?>"  alt="capaPerfil" id="imagemPerfil">
                    <input type="file" id="uploadImagemPerfil" style="display: none;">
                </div>
                
                <div class="informacoesPerfil">
                    <div class="separacao">
                        <div class="nomeFormacao">
                            <div>
                                <h1><?php echo $dados['nome'] ?></h1>
                                <img id="interruptor" style="display: <?php echo estaLogado() ? 'flex' : 'none' ?>;" src="../public/img/engine.png" alt="Editar">  
                            </div>
                            <h2><?php echo $dados['especialidade'] ?></h2>
                            <p><?php echo $dados['numero_oab'] ?></p>
                            <p><?php echo $dados['modelo_consultoria'] ?></p>
                        </div>
                        

                            <div id="modal">
                                <div>

                                    <ul>
                                        <li id="editar">Editar</li>
                                        <li id="salvar">Salvar</li>
                                        <li id="sair">Sair</li>
                                    </ul>
                                </div>
                            </div>
                    </div>

                    <div class="feedbackVisual">
                        <div class="redesSociais">
                            <p><strong>Redes Sociais:</strong></p>
                            <div class="tiposRedeSocial">   
                                <img src="../public/img/instagram.png" alt="instagram">
                                <img src="../public/img/facebook.png" alt="facebook">
                                <img src="../public/img/linkedin.png" alt="linkedin">
                            </div>
                        </div>
                        <div class="casosResolvidos">
                            <p><strong>Casos:</strong></p>
                            <div class="numeroCasos">
                                <p><?php echo rand(1, 100) ?></p>
                            </div>
                        </div>
                        <div class="avaliacoes">
                            <Strong>Média:</Strong>
                            <div class="nota">
                                <div class="estrela"></div>
                                <div class="estrela"></div>
                                <div class="estrela"></div>
                                <div class="estrela"></div>
                                <div class="estrela"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </section>
        <?php } ?>
        <section class="resumoProfissional">
            <div class="biografia">
                <h1>Resumo Profissional</h1>
                    <div class="box">
                        <p id="paragrafo-resumo"><?php   
                            foreach($dadosPerfil as $DadosPerfil){
                            echo $DadosPerfil['resumo_profissional']; 
                        ?>
                        </p>
                    </div>
            </div>
            <div class="servicosOferecidos">
                <h2>Especialidades:</h2>
                <div class="servico">
                    <p id="especialiade_1" ><?php echo $DadosPerfil['especialidade_1']; ?></p>
                    <p id="especialiade_2"><?php echo $DadosPerfil['especialidade_2']; ?></p>
                    <p id="especialiade_3"><?php echo $DadosPerfil['especialidade_3']; ?></p>
                    <?php } ?>
                </div>
            </div>
        </section>
        <section class="avaliacoes">
            <h3>Avaliações</h3>

            <?php 
            if(!estaLogado()){
            include('include/clienteAvaliacao.php'); 
            } ?>

          
            <div class="perfilComentario">
                <div class="perfilUsuario" >
                    <?php
                        foreach($Pegando_avaliacoes as $avaliacoes){   
                    ?>
                    <img src="<?php echo $avaliacoes['imagem'] ?>" alt="perfil">
                </div>
                <div class="feedback">
                    <div class="usuario">
                            
                        <p id="nomePerfil"><?php echo $avaliacoes['nome'] ?></p>
                        <div class="nota">
                            <div class="estrela"></div>
                            <div class="estrela"></div>
                            <div class="estrela"></div>
                            <div class="estrela"></div>
                            <div class="estrela"></div>
                        </div>
                    </div>
                    
                    <div class="comentario"><?php echo $avaliacoes['comentario'] ?></div>
                </div>
                <?php } ?>
            </div>
         
        </section>
    </main>


    <?php include('include/footer.php'); ?>
    <script src="../Controller/pegando_comentario_de_cliente_no_perfilAdvogado.js"></script>
    <script src="../public/javascript/selecionando_novos_dados_perfil_advogado.js"></script>
    <script src="../public/javascript/menuLogado.js"></script>
    <script src="../public/javascript/engrenagem.js"></script>


    <!--Acessibilidade Libras-->
    <?php include('../View/include/libras.php')?>

    

</body>
</html>