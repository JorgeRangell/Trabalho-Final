<?php

include 'bd_connect.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

// $nome = $_POST['nome'];

$query = "select usuario,senha,level from participantes where usuario = '$usuario'";

$login = mysqli_query($con,$query);

$row = mysqli_fetch_assoc($login);

$nivel = $row['level'];



if($usuario ==$row['usuario'] && $senha == $row['senha']){
   session_start();
   $_SESSION['usuario'] = $usuario;
   $_SESSION['level'] = $nivel;
   if($nivel == 'U'){

      header('location:home.php');
   }
   else if($nivel == 'A') {
      header('location:admin.php');
   }


}else{
   header('location:index.php?erro_pass=true');
   exit;
}

?>