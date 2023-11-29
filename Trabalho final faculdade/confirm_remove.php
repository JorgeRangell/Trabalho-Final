<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirma</title>
</head>
<body>

    <?php
        $usuario = $_GET['user'];
        session_start();
        $_SESSION['usuario'] = $usuario;
    ?>
    <h3>Você deseja remover o usuário <?php echo $usuario ?>?</h3> 
    <form action="remove_user.php" method="post">
        <input type="radio" name="confirm" value="S">SIM
        <input type="radio" name="confirm" value="N">NÃO
        <input type="submit" value="Enviar">
    </form>


</body>
</html>

