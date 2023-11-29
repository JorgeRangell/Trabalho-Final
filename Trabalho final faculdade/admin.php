<?php
    include 'check_login.php';

    if($_SESSION['level'] != 'A'){
        header('location:index.php?access=true');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração</title>
    <link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body class="bgadmin">
    <header>
        <a href="#" class="logo">PikachuBurguer</a>
        <ul class="navlist">
            <li><a href="home.php">Home</a></li>
            <li><a href="home.php#destaque">Destaques</a></li>
            <li><a href="home.php#quemsoueu">Quem sou eu</a></li>
            <li><a href="carrinho.php">Produtos.</a></li>
            <a href="logout.php"> Sair </a>
        </ul>
        <img class="image-destaques" src="https://pbs.twimg.com/profile_images/1643997380625285120/P50jFzhD_200x200.jpg" alt="Bolo Destaque1" >
        <div class="bx bx-menu" id="menu-icon"> </div>
        <script src="js/script.js"></script>
    </header>
    <div class="top">
    <br>
    <br><div class="barras">
        <h3>Crie novos usuários para o sistema</h3>
         </div>
    <form class="form-admin" action="new_user.php" method="post">
        <label for="usuario">Usuário:</label>
            <input type="text" name="usuario"><br>
            <br>
            <label for="senha">Senha</label>
            <input type="text" name="senha"><br>
            <br>
            <label for="level">Nivel de acesso: </label><br>
            <br>
            <input type="radio" name="level" value="A" clas= >Administrador<br>
            <input type="radio" name="level" value="U">Usuário<br>
            <input type="submit" value="Cadastrar">
    </form>
    <div class="login_body">
        <h3>Usuários cadastrados: </h3>
        <br>
    <?php
        include 'show_users.php';
    ?>
</div>
    <div>
        <a href="home.php"><input type="submit" value="Home" class="enviar"> </a> 
        
       

</div>
</body>
</html>