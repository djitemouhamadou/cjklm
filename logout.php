<?php
    session_start();
    $_SESSION=array();
    session_destroy();
    header('Location: Acces_au_compte.php');
?>