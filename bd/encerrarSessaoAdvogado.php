<?php
    session_start();
    unset($_SESSION['emailAdvogado']);
    unset($_SESSION['senhaAdvogado']);
    header('Location: ../index.html');
?>