<head>

<style>
    #imagemDoBanco {
        height: 50px;
    }
    .divUsuario {
        background-color: yellow;
        height: 300px;
    }
</style>


</head>
<body>

    <div class="perfil" style="width: 100%;">
        <div class="divUsuario">
                <?php
                    foreach($Pegando_avaliacoes as $avaliacoes){   
                ?>

                <img src="<?php echo $avaliacoes['imagem'] ?>" id="imagemDoBanco" alt="perfil">

                <p id="nomePerfil"><?php echo $avaliacoes['nome'] ?></p>

                <div class="nota">
                    <div class="estrela"></div>
                    <div class="estrela"></div>
                    <div class="estrela"></div>
                    <div class="estrela"></div>
                    <div class="estrela"></div>
                </div>

                <div class="comentario"><?php echo $avaliacoes['comentario'] ?></div>
        </div>
                    
        
        <?php } ?>
        
    </div>
</body>
