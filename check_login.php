<?php
include 'bd_connect.php';
    session_start();
    
    if(!isset($_SESSION['usuario'])){
            header('location:index.php?erro_login=true');
            exit;
    }
?>