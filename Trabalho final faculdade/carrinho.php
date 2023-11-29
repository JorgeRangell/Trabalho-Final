<?php
session_start();
$connect = mysqli_connect("localhost","root","","shopping_cart");

if(isset($_POST['add_to_cart'])){
    if(isset($_SESSION['cart'])){
        $session_array_id = array_column($_SESSION['cart'], "id");



        if(!in_array($_GET['id'], $session_array_id)){

            $session_array = array(
                'id' => $_GET['id'],
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'quantity' => $_POST['quantity']
            );
    
           $_SESSION['cart'][] = $session_array; 
        }

    }else{
        $session_array = array(
            'id' => $_GET['id'],
            'name' => $_POST['name'],
            'price' => $_POST['price'],
            'quantity' => $_POST['quantity']
        );

       $_SESSION['cart'][] = $session_array; 
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/carrinho.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Croissant+One&family=Pixelify+Sans&family=Poppins:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,500&display=swap" rel="stylesheet">
    <title>Shopping Cart</title>
</head>
<body>
<header>
        <a href="#" class="logo">PikachuBurguer</a>
        <ul class="navlist">
            <li><a href="home.php">Home</a></li>
            <li><a href="home.php#destaque">Destaques</a></li>
            <li><a href="home.php#quemsoueu">Quem sou eu</a></li>
            <li><a href="produtos.php">Produtos.</a></li>
            <a href="logout.php"> Sair </a>
        </ul>
        <script src="js/script.js"></script>
        <div class="bx bx-menu" id="menu-icon"> </div>
    </header>
    
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="header">
                    <h2 class="logo">Nossos Produtos: </h2>
                    </div>

                    <?php

                    $query = "SELECT * FROM cart_item1";
                    $result = mysqli_query($connect,$query);


                    while ($row = mysqli_fetch_array($result)) {?>
                    <div class="corpoProduto">

                    <form method="post" action="carrinho.php?id=<?=$row['id']?> ">
                    <img class="image_carrinho" src="img/<?= $row['image'] ?>">
                    <h5 class="titulo"><?= $row['name'];?></h5>
                    <h5 class="preço">R$<?= number_format ($row['price'],2); ?></h5>
                    <input type="hidden" name="name" value="<?= $row['name'] ?>">
                    <input type="hidden" name="price" value="<?= $row['price'] ?>">
                    <input type="number" name="quantity" value="1" class="form-control">
                    <input type="submit" name="add_to_cart" class="btn btn-warning btn-block my-2" value="Adicionar">
                    </form>
                    </div>
                    <?php }

                    ?>
                </div>
                <div class="barraLateral">
                <div class="col-md-6">
                    <div class="header2">
                    <h2 class="text-center">Itens selecionados:</h2>
                    </div>
                    <?php
                    $total = 0;


                    $output = "";

                    $output .= "
                    <table class='table table-bordered table-striped'>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th>Total</th>
                        <th>Ações</th>
                        </tr>

                        ";

                        if(!empty($_SESSION['cart'])) {

                            foreach($_SESSION['cart'] as $key => $value){

                                $output .= "
                        <tr>
                            <td>".$value['id']."</td>
                            <td>".$value['name']."</td>
                            <td>".$value['price']."</td>
                            <td>".$value['quantity']."</td>
                            <td>R$".number_format($value['price'] * $value['quantity'],2)."</td>
                            <td>
                                <a href='carrinho.php?action=remove&id=".$value['id']."'>
                                <button class='btn btn-danger btn-block'>Remover</button>
                                </a>
                            </td>

                            ";


                             $total = $total + $value['quantity'] * $value['price'];
                            }

                            $output .="
                            <tr>
                            <td colspan='3'></td>
                            <td><b>Preço total</b></td>
                            <td>".number_format($total,2)."</td>
                            <td>
                                <a href='carrinho.php?action=clearall'>
                                    <button class='btn btn-warning btn-block'>Clear</button>
                                </a>
                             </td>

                            </tr>
                            ";
                        }

                        

                        echo $output;
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
    <?php

    if(isset($_GET['action'])){

        if($_GET['action'] == "clearall"){
            unset($_SESSION['cart']);
        }

        if($_GET['action'] == "remove"){

            foreach ($_SESSION['cart'] as $key => $value) {
                if ($value['id'] == $_GET['id']) {
                    unset($_SESSION['cart'][$key]);
               }
            }
        }



    }


    ?>


</body>
</html>