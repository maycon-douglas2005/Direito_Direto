<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../public/css/header.css">
    <link rel="stylesheet" href="../public/css/cadastroAdvogado.css">
    <link rel="stylesheet" href="../public/css/modoDarkLight/acessibilidadeCadastroAdvogado.css">

    <title>Direito Direto - Cadastro Advogado</title>
</head>
<body>
<body>
    <?php include('include/header.html');?>
    <main>
        <section class="container" id="container">
            
            <h1>Preencha Seus Dados</h1>
                <div id="informacoes">

                    <section class="cadastro-container">                                
            
                        <section class="dadosCadastrais">
                            <form class="formulario" id="form1">

                                <fieldset>
                                    <legend>Dados cadastrais</legend>
                    
                                    <div class="nomeSobrenome">
                                        <label for="nome">Nome completo:</label>
                                        <input type="text" name="nomeCompleto" id="nomeCompleto" required>
                                    </div>
                    
                                    <div class="dataNascimentoSexo">

                                        <div class="dataNascimento">
                                            <label for="dataNascimento">Data de Nascimento: </label>
                                            <input type="date" name="dataNasci" id="dataNascimento" required>
                                        </div>
                                        
                                        <div class="sexo">
                                            <label for="sexo">Sexo:</label>
                                            <select name="sexo" id="sexo" required>
                                                <option value="" disabled selected>Selecione...</option>
                                                <option value="masculino">Masculino</option>
                                                <option value="feminino">Feminino</option>
                                            </select>
                                        </div>
                                    </div>
                    
                                    <div class="email">
                                        <label for="email">Email:</label>
                                        <input type="text" name="email" id="email" required>
                                    </div>
                    
                    
                                    <div class="tipoTelefone">
                                        <div>
                                            <label for="telefone">Senha:</label>
                                            <input type="password" name="senha" id="telefone" required>
                                        </div>

                                        <div>
                                            <label for="celular">Celular:</label>
                                            <input type="tel" name="celular" id="celular" required>
                                        </div>
                                    </div>
                    
                    
                                    <div class="cpfNumeroOAB" style="display: none;"> 
                                        <div> <!--
                                            <label for="numeroOAB">Numero da OAB:</label>
                                            <input type="number" name="numeroOAB" id="numeroOAB" required> -->
                                        </div>
                                        
                                    </div>
                    
                                    <div class="modeloDeConsultoria" style="display: none;"> <!--
                                        <label for="modeloDeConsultoria">Modelo de Consultoria: </label>
                                        <select name="modeloDeConsultoria" id="modeloDeConsultoria" required>
                                            <option value="" disabled selected>Selecione...</option>
                                            <option value="Presencial">Presencial</option>
                                            <option value="Online">Online</option>
                                            <option value="Presencial e Online">Presencial e Online</option>
                                        </select>-->
                                    </div>

                                </fieldset>                
                            </form>
                        </section>

                        <section class="informacoesEndereco">
                            <form class="formulario" id="form2">
                                <fieldset>
                                    <legend>Informações Endereço</legend>

                                    <div class="cepBairro">
                                        <div>
                                            <label for="cep">Cep:</label>
                                            <input type="text" name="cep" id="cep" required>
                                        </div>

                                        <div>
                                            <label for="bairro">Bairro:</label>
                                            <input type="text" name="bairro" id="bairro" required>
                                        </div>
                                    </div>

                                    <div class="ruaNumero">
                                        <div id="rua">
                                            <label for="rua">Rua:</label>
                                            <input type="search" name="rua" id="rua" required> 
                                        </div>

                                        <div id="numero">
                                            <label for="numero">Número:</label>
                                            <input type="number" name="numero_casa" id="numero" required>
                                        </div>
                                    </div>

                                    <div class="cidadeComplemento">

                                        <div>
                                            <label for="cidade">Cidade:</label> 
                                            <input type="text" name="cidade" id="cidade" required>
                                        </div>

                                        <div>
                                            <label for="complemento">Complemento:</label>
                                            <input type="text" name="complementoCasa" id="complemento" required>
                                        </div>
                                    </div>
                                </fieldset>

                            </form>
                        </section>
                    
                    </section>

                    <section class="fotoPerfil-container">
                        <h1>Escolha uma foto de perfil</h1>
        
        
                        <!---Se por acaso o código quebrar adiciona a uma div com o img dentro e colocar a propriedade
                        css: overflow: hidden; dentro da div que deve corre tudo bem, ou segue seu plano original mailon  --->
                        <img src="" id="preview">
        
                        <form id="form3" enctype="multipart/form-data">  
                            <label for="arquivo" class="arquivo-label">Escolha o arquivo</label>
                            <input type="file" id="arquivo" name="imagem" required>
                            <span class="arquivo-texto">Nenhum arquivo escolhido</span>
                        </form>   
        
                    </section>
                </div>

                <div class="enviar">
                    <button type="button" id="submitBtn">Confirmar</button>
                </div>

        </section>

    </main>
        <script src="../public/javascript/preview_foto_perfil.js"></script>
        <script src="../Controller/enviar_dados_do_form_para_model.js"></script>
        <script src="../public/javascript/menu.js"></script>
        <script src="../public/javascript/arquivo.js"></script>

        <!--Acessibilidade Libras-->
        <!--<div class="acessibilidade-container">-->
            <?php include('../View/include/libras.php');?>
        <!--</div>-->
    </body>
</html>