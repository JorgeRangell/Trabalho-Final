<?php
   include 'check_login.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pikachu Burguer</title>
    <link rel="stylesheet" type="text/css" href="css/home1.css">
    <!--Box de icones -->
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!--Remixicons de icones -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <!--Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Croissant+One&family=Pixelify+Sans&family=Poppins:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,500&display=swap" rel="stylesheet">

</head>
<body class="body">
<header>
        <a href="#" class="logo">PikachuBurguer</a>
        <ul class="navlist">
            <li><a href="#">Home</a></li>
            <li><a href="#destaque">Destaques</a></li>
            <li><a href="#quemsoueu">Quem sou eu</a></li>
            <li><a href="carrinho.php">Produtos.</a></li>
            <a href="logout.php"> Sair </a>
        </ul>

        <div class="bx bx-menu" id="menu-icon"> </div>
    </header>
    <section class="pikachu">
        <div class="pikachu-text">
            <h5>Pikachu Burguer</h5>
            <h4>Localização:</h4>
            <p> Rua:Faz de conta, bairro:Aquele la, número 205º, em São Pedro da Aldeia.</p>
        </div>
        <div class="pikachu-img">
            <img src="img/pikachu_burguer-removebg-preview.png">
        </div>
    </section>
    <div class="icons">
        <a href="https://www.instagram.com"><i class="ri-instagram-line"></i></a>
        <a href="https://www.youtube.com"><i class="ri-youtube-line"></i></a>
        <a href="https://www.facebook.com"><i class="ri-facebook-line"></i></a>
    </div>
    


    <script src="js/script.js"></script>
    <section class="section-destaques" id="destaque">
        <div class="destaque-text">
        <h5>DESTAQUE:</h5>
        <p><b> Veja exemplos dos nossos produtos: </b></p>
        </div>
        <div class="mae">
            <img class="image-destaques-cell" src="https://blogdacarne.com/wp-content/uploads/2016/09/pokemon2.jpg" alt="Bolo Destaque1" >
            <img class="image-destaques-cell" src="img/hamburguer1.jpg" alt="Bolo Destaque1" >
            <img class="image-destaques" src="https://blogdacarne.com/wp-content/uploads/2016/09/pokemon2.jpg" alt="Bolo Destaque1" >
            <img class="image-destaques" src="img/batatafrita.jpg" alt="Bolo Destaque1" >
            <img class="image-destaques" src="img/hamburguer1.jpg" alt="Bolo Destaque1" >
        </div>

    </section >

    <section class="section-cardápio" id="cardápio">
        <div class="cardapio-text">
            <h5>Cardápio da lanchonete:</h5>
            <h4><b> Aceitamos pix, dinheiro, cartão, vale alimentação, cheque, sinal de fumança, trocamos seu vale transporte por um hamburguer, valorant points, bitcoins e podemos negociar.</b></h4>
            </div>
            <div class="pikachu-img">
                <img class="image-cardapio" src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/e6fde7124443101.6103f52c5a583.png" alt="Bolo Destaque1" >
 

            </div>
    </section>

    <section class="section-quemsoueu" id="quemsoueu">
        <div class="quemsoueu-text">
            <h5>Um pouco sobre nós:</h5>
            <p> Somos uma burgueria com tematica do Pikachu, fazemos os lanches com o maior carinho e amor possível.</p>
            <h4>Pikachu é um personagem muito popular no mundo, principalmente no Japão, ao ponto de ter sido chamado como o equivalente japonês de Mickey Mouse. É considerado um ícone da cultura kawaii. Além de ser o mascote, ele é o personagem mais popular da franquia.De modo que, mostrando apenas a sua imagem, o Pokémon amarelo é facilmente reconhecido por adolescentes e adultos.Foi o oitavo personagem de ficção mais lucrativo em 2002, segundo levantamento da revista Forbes.</h4>
            </div>
            <div>
                <img class="image-quemsoueu" src="img/il_fullxfull.2022094023_t2s5-removebg-preview.png">
                </div>
                <div class="scroll-up">
                    <a href="#"><i class="ri-arrow-up-fill"></i></a>
                </div>
    </section>

    <section class="footer-contato" id="contato">
        <div class="footer-text">
            <h5>Feedback</h5>
            <div class="message-contato">
                <label for="form-name"><h5> Nome: </h5></label>
                <input type="text" name="form-nome" id="form-nome">
                <label for="form-email"><h5>  E-mail: </h5></label>
                <input type="email" name="form-email" id="form-email">
                <label for="message"><h5>Mensagem: </h5></label>
                <textarea name="message" id="form-text" cols="30" rows="1"></textarea>
                <button class="button" src="">Enviar</button>
     </div>
            </div>
    </section>



</body>
</html>