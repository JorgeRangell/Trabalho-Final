<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova senha</title>
</head>
<body>
    <?php
        $usuario = $_GET['user'];
        session_start();
        $_SESSION['usuario'] = $usuario;
    ?>
    <h3>Digite a nova senha para o usuário <?php echo $usuario ?></h3>
    <form action="change.php" method="post">
        <label for="nova_senha">Nova Senha:</label>
        <input type="text" name="nova_senha">
        <input type="submit" value="Alterar">
    </form>
</body>

</html>