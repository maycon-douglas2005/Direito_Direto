    <?php 

        // Verificando se a pessoa está logada, caso contrário, não poderá continuar a pagina.
        session_start();
        if(!isset($_SESSION['email']) && !isset($_SESSION['senha']) ){
                /*se o usuario estiver logado e consequentemente com uma sessão iniciada, 
                poderá continuar na página atual, caso contrário sera redireionada
                para a página de login, impedindo que alguem acesse essa pagina sem 
                possuir um cadastro/login.
                */
                unset($_SESSION['email']);
                unset($_SESSION['senha']);
                header('Location: login.php');
            }

        //                                           CÓDIGO PARA O SISTEMA DE BUSCA

        include('../Model/config.php'); 

        if(isset($_GET['aplicar'])){
            $localizacao = '%' . trim($_GET['localizacao']) . '%';
            $especialidade = '%' . trim($_GET['especialidade']) . '%';
            $modeloConsultoria = $_GET['modeloConsultoria'];

            // Código para fazer a busca dos parâmetros no banco
            $busca = $conexao->prepare("SELECT * FROM advogados WHERE cidade LIKE :localizacao AND modelo_consultoria LIKE :modeloConsultoria AND especialidade LIKE :especialidade");
            $busca->bindParam(':localizacao', $localizacao, PDO::PARAM_STR);
            $busca->bindParam(':modeloConsultoria', $modeloConsultoria, PDO::PARAM_STR);
            $busca->bindParam(':especialidade', $especialidade, PDO::PARAM_STR);
            $busca->execute();

            $resultadosBusca = $busca->fetchAll(PDO::FETCH_ASSOC);

        }

        $emailDoCliente = $_SESSION['email'];
        $cliente = $conexao->prepare('SELECT * FROM clientes WHERE `e-mail` = :email');
        $cliente->bindParam(':email', $emailDoCliente);

        $cliente->execute();


        $Cliente = $cliente->fetchAll(PDO::FETCH_ASSOC);

        foreach($Cliente as $Clientes){
            $_SESSION['nomeDoCliente'] = $Clientes['nome'];
            $_SESSION['imagemDoCliente'] = $Clientes['imagem'];

        }

    ?>

    <!DOCTYPE html>
    <html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--Fonte de texto do site-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">    

        <!--CSS-->
        <link rel="stylesheet" href="../public/css/headerUsuarioLogado.css">
        <link rel="stylesheet" href="../public/css/buscaAdvogado.css">

        <title>Busca</title>
    </head>

    <body>
        <?php 
        include('include/headerUsuarioLogadoCliente.php');?>
        
        <main>

            <section class="filtro-advogado">
                <form action="" method="GET">
                    <fieldset class="filtro">
                        <legend>Filtro</legend>

                        <div class="localizacao">
                            <label  for="localizacao">Localização:</label><br>
                            <input class="divCampoLocalização" type="search" name="localizacao" id="localizacao">
                        </div>

                        <!--  <div class="divRadioDistancia">
                            <label for="raioDistancia">Raio de Distancia:</label>
                            <select name="raioDistancia" id="raioDistancia">
                                <option value="vazio"></option>
                                <option value="distancia_5km">5 km</option>
                                <option value="distancia_50km">50 km</option>
                                <option value="distancia_100km">100 km</option>
                            </select>
                        </div> -->

                        <div class="especialidade">
                            <label for="especialidade">Especialidade:</label>
                            <input type="text" name="especialidade" id="especialidade">
                        </div>

                        <div class="honorario">
                            <label for="modeloConsultoria">Modelo de Consultoria:</label>
                            <select name="modeloConsultoria" id="honorario">
                                <option value="Online">Online</option>
                                <option value="Presencial">Presencial</option>
                                <option value="Presencial e Online">Presencial e Online</option>
                            </select>
                        </div>

                        <!--<div class="divHonorario">
                            <label for="honorario">Honorário:</label>
                            <select name="honorario" id="honorario">
                                <option value="vazio"></option>
                                <option value="preco1">R$ 1.000,00</option>
                                <option value="preco2">R$ 2.000,00</option>
                                <option value="preco3">R$ 3.000,00</option>
                                <option value="preco4">R$ 4.000,00</option>
                                <option value="preco5">R$ 5.000,00</option>
                            </select>
                        </div> 

                        <div class="divConsultaGratuita">
                            <label for="consultaGratuita">Consulta Gratuita:</label>
                            <input type="checkbox" name="consultaGratuita" id="consultaGratuita">
                        </div> -->

                        <div class="enviar">
                            <button type="submit" name="aplicar">Aplicar</button>
                            <button style="margin-top: 5px;" type="submit" name="recarregar">Retirar Filtros</button>
                        </div>
                    </fieldset>
                </form>
            </section> 


            <section class="content">
                <?php 
                    

                $perfis = $conexao->query("SELECT * FROM advogados");

                if(isset($_GET['aplicar'])){
                    foreach($resultadosBusca as $ResultadosBusca){ ?>
                        <div class="perfilUsuario">
                                
                            <img class="fotoFundo" src="<?php echo $ResultadosBusca['imagem_fundo'] ?>" alt="Erro ao exibir imagem">   
                            <img class="fotoPerfil" src="<?php echo $ResultadosBusca['imagem'] ?>" alt="Erro ao exibir imagem">   
                            <div class="dados">
                                <?php

                                $nomeDoAdvogado = $ResultadosBusca['nome'];                     
                                $especialidadeDoAdvogado = $ResultadosBusca['especialidade']; 
                                $modeloConsultoriaDoAdvogado = $ResultadosBusca['modelo_consultoria']; 
                                $cidadeDoAdvogado = $ResultadosBusca['cidade']; 



                                echo $nomeDoAdvogado; 
                                echo '<br>';
                                echo $especialidadeDoAdvogado;
                                echo '<br>';
                                echo $modeloConsultoriaDoAdvogado;
                                echo '<br>';
                                echo $cidadeDoAdvogado;
                                echo '<br>';
                                
                                ?>
                                <a href="perfilAdvogado.php?id=<?php echo $ResultadosBusca['id']; ?>">Ver Perfil</a>
                            </div>
                        </div>
                    <?php } 
                    

                } elseif (isset($_GET['recarregar']) || !isset($_GET['aplicar']) && !isset($_GET['recarregar'])) {
                    foreach($perfis as $divs){?>
                        <div class="perfilUsuario">

                            <img class="fotoFundo" src="<?php echo $divs['imagem_fundo'] ?>" alt="">
                            <img class="fotoPerfil" src="<?php echo $divs['imagem'] ?>" alt="">
                            <div class="dados">
                            <?php 

                                $nomeDoAdvogado = $divs['nome']; 
                                
                                $especialidadeDoAdvogado = $divs['especialidade'];
                                $modeloConsultoriaDoAdvogado = $divs['modelo_consultoria']; 
                                $cidadeDoAdvogado = $divs['cidade']; 
                                

                          
                                    
                                

                                echo $nomeDoAdvogado;
                                echo '<br>';
                                echo $especialidadeDoAdvogado;
                                echo '<br>';
                                echo $modeloConsultoriaDoAdvogado;
                                echo '<br>';
                                echo $cidadeDoAdvogado;
                                echo '<br>';
                                
                            ?>

                            <a href="perfilAdvogado.php?id=<?php echo $divs['id']; ?>">Ver Perfil</a>

                            </div>
                        </div>
                        
                    <?php } } ?>
                
                    
            </section>
        </main>

        <script src="../public/javascript/menuLogado.js"></script>
        <script src="../public/javascript/filtro.js"></script>

        <!--Acessibilidade Libras-->
        <?php include('../View/include/libras.php')?>
    </body>
    </html>