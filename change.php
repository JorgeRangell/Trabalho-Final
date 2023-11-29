<?php

    include 'bd_connect.php';
    $nova_senha = password_hash($_POST['nova_senha'],PASSWORD_DEFAULT);
    session_start();
    $usuario = $_SESSION['usuario'];
    
    $query = "update credent set senha='$nova_senha' where usuario='$usuario'";

    if(mysqli_query($con,$query)){
        header('location:admin.php?novasenha=true');
    }else{
        header('location:admin.php?novasenha_erro=true');
    }


?>