<?php
require('conexao.php');

print_r($_GET);

if (!isset($_GET["p"])) {
    die('Nao existe o P');
}

$cod =  $_GET["p"];

$query = "SELECT p.name, p.description, c.src FROM product p join image c on p.id = ".$cod ;

$result = mysqli_query($conexao, $query);



$nome = '';
$descricao = '';
$src = '';

while ($row = mysqli_fetch_row($result)) {
    $nome = $row[0];
    $descricao = $row[1];
    $src = $row[2];
}

// for ($i=0; $i<10; $i++0{
//     $ofertas
// })
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="app">
        <div id="header-global" class="d-header">
            <div class="d-header-menu">
                <a href="index.php#home-page">Home</a>
                <a href="index.php#products-page">Produtos</a>
                <a href="index.php#contact-page">Contato</a>
            </div>
            <div id='little-cart' class="d-car">
                <div id='noty-c' class="noty-cart"></div>
            </div>
        </div>
        <div id="products-page" class="d-page"">
            <div class="d-main">
                <div class="products">
                    <br>
                    <div class=""><?= $nome ?></div>
                    <br><hr><br>
                    <div class="itens-products">
                        <div class="items">
                            <div class="product">
                                <div class="product-image">
                                    <img class="image" src="<?= $src ?>" />
                                </div>
                                <div class="product-description">
                                    <div class="product-text"><?= $descricao ?></div>
                                    <div class="product-button">
                                        <button id='addCartProduct' class="button">confirmar</button>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
        <div id="painel-little-cart" class="d-painel d-painel-open">
            <div class="d-painel-main">
                <div class="d-painel-header">
                    <div id='painel-close'></div>
                    <div class="d-painel-title">Carrinho</div>
                </div>
                <div class="d-painel-content">
                    <div class="d-painel-product">
                        <div class="d-painel-product-img">
                            <img src="./img/salgados.jfif">
                        </div>
                        <div class="d-painel-product-main">
                            <div class="d-painel-product-main-header">
                                <div class="d-painel-product-main-header-title">Coxinha</div>
                                <div class="d-painel-product-main-header-trash"></div>
                            </div>
                            <div class="d-painel-product-main-content">
                                <div class="d-painel-product-main-content-qtd">
                                    <div>-</div>
                                    <div>0</div>
                                    <div>+</div>
                                </div>
                                <div class="d-painel-product-main-content-total">
                                    R$ 35.00
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-painel-footer">
                    <div class="d-painel-footer-totalizer">
                        <div class="d-painel-footer-totalizer-1">Total</div>
                        <div class="d-painel-footer-totalizer-2">R$ <span>100.00</span></div>
                    </div>
                    <div class="d-painel-footer-finality">
                        <button id="finality">Finalizar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
    <script>
        const addCartProduct = document.getElementById('addCartProduct')

        // addCartProduct.addEventListener('click', addItemsInCart)
        const teste = () => {
            saveProductInLocalStore('Coxinhas', '30', '45.60')
        }
        addCartProduct.addEventListener('click', teste)



    </script>
</body>
</html>