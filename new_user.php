<?php
    
    include 'bd_connect.php';

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha']; 
    $nivel = $_POST['level']; 
    
    $query = "insert into participantes(usuario,senha,level)
            values('$usuario','$senha','$nivel')";

    if(mysqli_query($con,$query)){
        header('location:admin.php?user_ok=true');
    }else{
        header('location:admin.php?user_erro=true');
    }

    
?>