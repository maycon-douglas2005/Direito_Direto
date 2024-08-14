<?php
    session_start();
    if((isset($_SESSION['emailAdvogado']) || (isset($_SESSION['emailCliente']) == true) and (isset($_SESSION['senhaAdvogado']) || (isset($_SESSION['senhaCliente']) == true)))){
        //se estiver logado ira para a pagina perfilAdvogado corretamente
    } else{
        //caso contrario ira para a pagina de loginAdvogado
        unset($_SESSION['emailAdvogado']);
        unset($_SESSION['senhaAdvogado']);
        header('Location: loginAdvogado.html');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/perfilAdvogado.css">
    <link rel="stylesheet" href="../css/cabecario.css">
    <title>Direito Direto - Perfil</title>
</head>
<body>
    
    <?php include('../include/headerUsuarioEadvogadoLogado.php');?>
    
    <section class="seçãoPerfilAdvogado">
        <div class="capaFundo">
            <div class="fotoPerfil"></div>
        </div>
        
        <div class="informacoesAdvogado">
            <div class="informacoesPessoais">
                <p><Strong>Nome: </Strong>Jose Augusto</p>
                <p><strong>Idade: </strong>32</p>
                <p><strong>Número da OAB: </strong>456SF45Y</p>
                <p><strong>Modelo de Consultoria: </strong>Híbrido</p>
            </div>
            <div class="feedbackVisual">
                <p><strong>Redes Sociais: </strong>* * * *</p>
                <p><strong>Casos Resolvidos: </strong>12</p>
                <p><Strong>Média de Avaliações: </Strong>* * * * *</p>
            </div>
        </div>
    </section>

    <section class="seçãoResumoProfissional">
        
        <div class="resumoProfissional">
            <h2>Resumo Profissional</h2>
            <div class="bordaResumoProfissional"><!--
                <p class="paragrafoResumoProfissional">Eu me chamo Jose Augusto, possuo 32 anos. Trabalho 
                    como advogado a 7 anos, e minhas especialidades são Criminal, 
                    Trabalhista e Civil.
                </p>-->
            </div>           
        </div>    
        
        <div class="servicosOferecidos">
            <h2>Serviços Oferecidos</h2>
            <div class="bordaServicosOferecidos">
                <div class="btn botao1">
                    <!--<strong><span>Direito Criminal</span></strong>-->
                </div>
                <div class="btn botao2">
                    <!--<strong><span>Direto Civil</span></strong>-->
                </div>
                <div class="btn botao3">
                    <!--<strong><span>Direito Trabalhista</span></strong>-->
                </div>
            </div>
        </div>
    </section>

    <section class="sectionAvaliacoes">
        <h2>Avaliações</h2>
        <div class="cabecalhoPerfil">
            <div class="fotoPerfilAvaliacao"></div>
            <h4>Jose Da Silva Santos</h4>
        </div>
        <div class="caixaTexto">
            
        </div>
    </section>
    <?php include('../include/footer.php');?>
</body>
</html>