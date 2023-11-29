<?php
    include 'bd_connect.php';

    $query = "select usuario,level from participantes";
    $usuario = mysqli_query($con,$query);
    
    while($row = mysqli_fetch_assoc($usuario)){

        echo
        
        " |Usuário: ".$row['usuario'].
        " |Nivel: ".$row['level'].
        "|<a href='confirm_remove.php?user=".$row['usuario']."'>   Remover   </a>".
        "|<a href='change_pass.php?user=".$row['usuario']."'>   Alterar   </a>".
        "<br>
        -------------------------------------------------------------
        <br>";
    
    }

   mysqli_close($con); 
?>