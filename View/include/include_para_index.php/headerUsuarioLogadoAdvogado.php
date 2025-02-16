<header> 
        <img id="logo" src="public/img/logo.png" alt="Logo">


        <div class="menu-container">
            <img id="perfil" src="<?php echo "public/" . $_SESSION['imagemDoAdvogado'] ?>" alt="menu">

            <div class="menu">
                
                <div class="usuario-container">
                    <div class="opcoesUsuarioLogado">
                        <div class="fotoPerfil">
                            <img id="perfilUsuario" src="<?php echo "public/" . $_SESSION['imagemDoAdvogado'] ?>" alt="foto perfil">
                            <p><?php echo $_SESSION['nomeDoAdvogado'] ?></p>
                        </div>

                        <div id="modalUsuarioLogado">
                            <ul class="navegacaoSite">
                                <a href="index.php"><li>Página Inicial</li></a>
                                <a href="View/perfilAdvogado.php"><li>Perfil</li></a>
                                <a href="View/contato.php"><li>Contato</li></a>
                                <a href="View/faq.php"><li>FAQ</li></a>
                            </ul>

                            <ul class="sair">
                            <a href="Controller/encerrarSessao.php"><li>Sair</li></a>
                            </ul>
                        </div>
                    </div>   
                </div>
        </div> 
    
</header>
