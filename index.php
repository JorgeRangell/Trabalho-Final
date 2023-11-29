<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/index2.css">
    <link href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!--Remixicons de icones -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Croissant+One&family=Pixelify+Sans&family=Poppins:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,500&display=swap" rel="stylesheet">

</head>
<body>
   
    <video autoplay loop muted plays-inline class="back-video">
        <source src="video.mp4" type="video/mp4">
    </video>
    
    <form action="auth.php" method="post">
    <div class="login_body">
        <div class="login_box">
            <h2>Entrar</h2>
            <h1>Faça login para acessar nossa loja.</h1>
            <form>
                <div class="input_box">
                <input type="text" name="usuario" placeholder="Digite o usuario"><br>
                </div>

                <div class="input_box">
                <input type="password" name="senha" placeholder="Digite a senha"><br>
                </div>

                <div>
                    <button class="submit">
                        Entrar
                    </button>
                </div>
            </form>

            <div class="support">
                <div class="remember">
                    <span><input type="checkbox" style="margin: 0;padding: 0; height: 13px;"></span>
                    <span>Lembre-se de mim</span>
                </div>
                <div class="help">
                    <a href="#">
                        Precisa de ajuda?
                    </a>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="error-box">
        <?php
            if(isset($_GET['erro_pass'])){
                echo "<p>Usuário ou senha incorretos!</p>";
            }
            elseif(isset($_GET['erro_login'])){
                echo'<p>É necessário fazer o login para acessar a página!</p>';

            }
            else{
                echo '';
            }


        ?>

    </div>
</body>
</html>