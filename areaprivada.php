<?php
     session_start();

     if(!isset($_SESSION['id_usuario'])){
        header("location: index.php");
        exit;
     }

?>

Seja Bem-Vindo(a)!

<a href="sair.php">SAIR</a>