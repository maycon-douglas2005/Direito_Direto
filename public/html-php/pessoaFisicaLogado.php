<?php
    session_start();
    if((!isset($_SESSION['emailCliente']) == true) and (!isset($_SESSION['senhaCliente']) == true)) {
        unset($_SESSION['emailCliente']);
        unset($_SESSION['senhaCliente']);
        header('Location: loginCliente.html');
    }
    $logado = $_SESSION['emailCliente'];    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Fonte de texto do site-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">    

    <!--CSS-->
    <link rel="stylesheet" href="../css/pessoaFisicaLogado.css">
    <link rel="stylesheet" href="../css/cabecario.css">

    <title>Home</title>
</head>
<body>
    <?php include('../include/headerUsuarioLogado.php');?>

    <main>

        <section class="campoDePesquisa">    
            <form action="#" >
            <div class="tituloFiltros">
                <h1>Filtros</h1>
            </div>
                <div class="filtros">
                    <div class="divCampoLocalização">
                        <label class="labelLocalização" for="localizacao">Localização:</label><br>
                        <input class="divCampoLocalização" type="search" name="localizacao" id="localizacao">
                    </div>

                    <div class="divRadioDistancia">
                        <label for="raioDistancia">Raio de Distancia:</label>
                        <select name="raioDistancia" id="raioDistancia">
                            <option value="vazio"></option>
                            <option value="distancia_5km">5 km</option>
                            <option value="distancia_50km">50 km</option>
                            <option value="distancia_100km">100 km</option>
                        </select>
                    </div>

                    <div class="divEspecialidade">
                        <label for="especialidade">Especialidade:</label>
                        <select name="especialidade" id="especialidade">
                            <option value="vazio"></option>
                            <option value="direitoCivil">Direito Civil</option>
                            <option value="direitoPenal">Direito Penal</option>                           </option>
                            <option value="direitoProcessualCivil">Direito Processual Civil</option>
                            <option value="direitoProcessualPenal">Direito Processual Penal</option>
                            <option value="direitoAdministrativo">Direito Administrativo</option>
                            <option value="direitoConstitucional">Direito Constitucional</option>
                            <option value="direitoTributario">Direito Tributário</option>
                            <option value="direitoDoTrabalho">Direito do Trabalho</option>
                            <option value="direitoEmpresarial">Direito Empresarial</option>
                            <option value="direitoPrevidenciario">Direito Previdenciário</option>
                            <option value="direitoDoConsumidor">Direito do Consumidor</option>
                            <option value="direitoAmbiental">Direito Ambiental</option>
                            <option value="direitoInternacional">Direito Internacional</option>
                        </select>
                    </div>

                    <div class="divHonorario">
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
                    </div>

                    <div class="divBotaoEnviar">
                        <button type="submit">Aplicar</button>
                    </div>
                    </div>
            </form> 
        </section>

    
        <section class="sectionAreaDosPerfis">
                <div class="retanguloDosPerfis1">
                    <div class="fotoDeFundo">
                        <div class="circuloFotoPerfil">
                        
                        </div>
                    </div>
                    
                    <div class="informaçõesAdvogado">
                        <p>Nome: Jose Augusto</p>
                        <p>Idade: 32</p>
                        <p>Especialidade: Direito Penal</p>
                        <a href="perfilAdvogado.php">Ver Perfil</a>
                    </div>
                </div>

                <div class="retanguloDosPerfis2">
                    <div class="fotoDeFundo">
                    <div class="circuloFotoPerfil">
                    
                    </div>
                    </div>
                    
                    <div class="informaçõesAdvogado">
                        <p>Nome: Jose Augusto</p>
                        <p>Idade: 32</p>
                        <p>Especialidade: Direito Penal</p>
                        <a href="perfilAdvogado.php">Ver Perfil</a>
                    </div>
                </div>

                <div class="retanguloDosPerfis1">
                    <div class="fotoDeFundo">
                    <div class="circuloFotoPerfil">   
                    
                    </div>
                    </div>
                    
                    <div class="informaçõesAdvogado">
                        <p>Nome: Jose Augusto</p>
                        <p>Idade: 32</p>
                        <p>Especialidade: Direito Penal</p>
                        <a href="perfilAdvogado.php">Ver Perfil</a>
                    </div>
                </div>

                <div class="retanguloDosPerfis2">
                    <div class="fotoDeFundo">
                    <div class="circuloFotoPerfil">
                        
                        </div>
                    </div>
                    
                    <div class="informaçõesAdvogado">
                        <p>Nome: Jose Augusto</p>
                        <p>Idade: 32</p>
                        <p>Especialidade: Direito Penal</p>
                        <a href="perfilAdvogado.php">Ver Perfil</a>
                    </div>
                </div>
        </section>
        <section class="includeFooter">
            <?php include('../include/footerPessoaFisicaLogado.php');?>
        </section>
    </main> 
</body>
</html>