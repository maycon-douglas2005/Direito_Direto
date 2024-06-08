<?php
    session_start();
    if((!isset($_SESSION['emailCliente']) == true) and (!isset($_SESSION['senhaCliente']) == true)) {
        unset($_SESSION['emailCliente']);
        unset($_SESSION['senhaCliente']);
        header('Location: loginCliente.html');
    }
    $logado = $_SESSION['emailCliente'];    
?>