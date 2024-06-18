<?php
    session_start();
    unset($_SESSION['emailCliente']);
    unset($_SESSION['senhaCliente']);
    header('Location: ../../index.php');
?>