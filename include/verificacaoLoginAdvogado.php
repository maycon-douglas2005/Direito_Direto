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