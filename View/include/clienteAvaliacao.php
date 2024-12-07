
    <div class="perfilComentario">
        <div class="perfilUsuario">
            <?php
                foreach($Informacoes_Do_Cliente_Para_Secao_Avaliacoes as $informacoes_do_cliente){
                $_SESSION['nomeDoCliente'] = $informacoes_do_cliente['nome'];
                $_SESSION['idDoCliente'] = $informacoes_do_cliente['id'];
                $_SESSION['foto_de_perfil_cliente'] = $informacoes_do_cliente['imagem'];
            ?>
            <img src="<?php echo $informacoes_do_cliente['imagem']; ?>" alt="perfil">
            <?php 
            }
            ?>
        </div>
        <div class="feedback">
            <div class="usuario">
                    
                <p id="nomePerfil"><?php echo $informacoes_do_cliente['nome']; ?></p>
                <div class="nota">
                    <div class="estrela"></div>
                    <div class="estrela"></div>
                    <div class="estrela"></div>
                    <div class="estrela"></div>
                    <div class="estrela"></div>
                    
                </div>
            </div>
            <form action="../Model/inserindo_comentario_do_cliente.php" method="POST">
                <textarea class="comentario" name="comentario" id=""></textarea>
                <button>Enviar Comentário!</button>
            </form>
        </div>
    </div>    

