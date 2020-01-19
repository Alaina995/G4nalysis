<?php
    session_start();
    session_destroy();
    header('location: ../Accueil/vraie_page_accueil.php');
?>