<?php
    include 'bd_connect.php';
    session_start();
    $usuario=$_SESSION['usuario'];
    $confirma=$_POST['confirm'];
    
if($confirma=='S'){
    $query="delete from participantes
        where usuario='$usuario'";

    if(mysqli_query($con,$query)){
        header('location:admin.php?user_deleted=true');
    }else{
        header('location:admin.php?erro_deleted=true');
    }
}else{
    header('location:admin.php');
}
mysqli_close();
?>