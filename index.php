<?php
require('conexao.php');

$query = "SELECT p.name, p.description, c.src, p.id FROM product p join image c on p.id = c.idProduct";
$result = mysqli_query($conexao, $query);

/* Produtos */
$products = '';

while ($row = mysqli_fetch_row($result)) {
    $products .= '<div class="product">';
    $products .= '<div class="product-image">';
    $products .= '<img class="image" src="'.$row[2].'" /></div>';
    $products .= '<div class="product-description">';
    $products .= '<div>'.$row[0].'</div>';
    $products .= '<div class="product-text">'.$row[1].'</div>';
    $products .= '<div class="product-button">';
    $products .= '<a class="button" href="produtoDetalhes.php?p='.$row[3].'">comprar</a>';
    $products .= '</div></div></div>';
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
                <a href="#home-page">Home</a>
                <a href="#products-page">Produtos</a>
                <a href="#contact-page">Contato</a>
            </div>
            <div id='little-cart' class="d-car">
                <div id='noty-c' class="noty-cart"></div>
            </div>
        </div>
        <div id="home-page" class="d-page"">
            <div class="d-main d-main-home">
                <div class="home-panel">
                    <div class="home-text-container">
                        <div class="home-tittle">Bem Vindo!</div>
                        <br>
                        <div>Sejam bem vindos(as) à nossa loja! Temos diversas opções de doces e salgados à venda, todos produzidos com ótimos ingredientes, muita dedicação e  muito carinho. Abaixo temos uma seleção de itens em oferta, aproveite!</div>
                    </div>
                        <br><br>
                    <div>
                        <div class="home-offer">OFERTAS</div>
                        <br><br>
                        <div class="home-images">
                            <div>
                                <div class="home-discount">-50%</div>
                                <img class="home-image" src="img/salgados.jfif" />
                            </div>
                            <div>
                                <div class="home-discount">-60%</div>
                                <img class="home-image" src="img/salgados.jfif" />
                            </div>
                            <div>
                                <div class="home-discount">-70%</div>
                                <img class="home-image" src="img/salgados.jfif" />
                            </div>
                            <div>
                                <div class="home-discount">-80%</div>
                                <img class="home-image" src="img/salgados.jfif" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="products-page" class="d-page"">
            <div class="d-main">
                <div class="products">
                    <br>
                    <div>Produtos</div>
                    <br><hr><br>
                    <div class="itens-products">
                        <div class="items">
                            <?=$products?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="contact-page" class="d-page ">
            <div class="d-main">
            <div class="contacts">
                    <br>
                    <div>Contato</div>
                    <br>
                    <hr>
                    <br>
                    <div class="itens-contacts">
                        <div class="items-contacts">
                            <div class="contact">
                                <div class="contact-image">
                                    <img src="img/whatsapp.svg" />
                                </div>
                                <div class="contact-description">
                                    <div>(XX) XXXXX-XXXX</div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="items-contacts">
                            <div class="contact">
                                <div class="contact-image">
                                    <img src="img/envelope-regular.svg" />
                                </div>
                                <div class="contact-description">
                                    <div>teste@email.com</div>
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
</body>
</html>