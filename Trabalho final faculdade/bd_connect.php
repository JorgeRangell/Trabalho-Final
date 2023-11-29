<?php

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'pikachu burguer';

    $con = mysqli_connect($host,$user,$password,$database);

    if(mysqli_connect_error()){
        echo 'Erro ao conectar!';
    }
?>