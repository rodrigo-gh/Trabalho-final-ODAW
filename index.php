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
        <div id="home-page" class="d-page" style="display: none ;">
            <div class="d-main">
                
            </div>
        </div>
        <div id="products-page" class="d-page" style="display: none ;">
            <div class="d-main">
                <div class="products">
                    <br>
                    <div>Produtos</div>
                    <br>
                    <hr>
                    <br>
                    <div class="itens-products">
                        <div class="items">
                        <div class="product">
                                <div class="product-image">
                                    <img class="image" src="img/salgados.jfif" />
                                </div>
                                <div class="product-description">
                                    <div>Coxinha</div>
                                    <div class="product-text"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit, repudiandae.</div>
                                    <div class="product-button">
                                        <button class="button">comprar</button>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="product-image">
                                    <img class="image" src="img/salgados.jfif" />
                                </div>
                                <div class="product-description">
                                    <div>Coxinha</div>
                                    <div class="product-text"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit, repudiandae.</div>
                                    <div class="product-button">
                                        <button class="button">comprar</button>
                                    </div>
                                </div>
                            </div>
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
        <div id="painel-little-cart" class="d-painel">
            <div class="d-painel-main">
                <div class="d-painel-header">
                    <div id='painel-close'></div>
                    <div class="d-painel-title">Carrinho</div>
                </div>
                <div class="d-painel-content">
                </div>
                <div class="d-painel-footer">
                    <div>
                        <div>Total</div>
                        <div>R$ <span>100.00</span></div>
                    </div>
                    <div>
                        <button>Finalizar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>