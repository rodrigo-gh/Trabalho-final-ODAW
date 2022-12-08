<html>
    <head>
        <title>Finalizar Pedido</title>
        <link rel="stylesheet" href="style.css">

    </head>
    <body style="background-color: aqua;">
        <div id="pagamento">
            <div class="pagamento-main">
                <div class="pagamento-header">
                    Pedido #300
                </div>
                <div class="pagamento-body">
                    <div class="pagamento-products">
                        <div class="pagamento-products-item">
                            <div class="pagamento-products-item-name">Coxinhas x20</div>
                            <div class="inline"></div>
                            <div class="pagamento-products-valor">R$ 35.00</div>
                        </div>
                        <div class="pagamento-products-item">
                            <div class="pagamento-products-item-name">Coxinhas x20</div>
                            <div class="inline"></div>
                            <div class="pagamento-products-valor">R$ 35.00</div>
                        </div>
                    </div>
                    <div class="pagamento-total">
                        <div class="pagamento-products-total">
                            <div class="pagamento-products-item-name">Total</div>
                            <div class="inline"></div>
                            <div class="pagamento-products-valor">R$ 70.00</div>
                        </div>
                    </div>
                </div>
                <div class="pagamento-footer">
                    <button id="seendBuy" class="button" style="width: 100%;">Encomendar</button>
                </div>
            </div>
        </div>
        <script>
            const seendBuy = document.getElementById('seendBuy')

            const seendWpp = () => {
                const products = JSON.parse(localStorage.getItem("user-cart") || "[]");
                let msg = "Bom dia!%0A"
                msg += "Eu vou querer...%0A"

                
                if (products != []) {
                    alert(products)
                    for (let i = 0; i < products.length ; i++){
                        msg += `${products[i].qtd}x ${products[i].name}%0A`
                    }


                    const link = `https://api.whatsapp.com/send/?phone=5518997057515&text=${msg}`

                    window.localStorage.removeItem('user-cart')
                    window.localStorage.removeItem('items-cart')
                    window.location.href = link
                } else {
                    alert('Não foi possivel concluir o envio!')
                }
                
            }

            seendBuy.addEventListener('click', seendWpp)

        </script>
    </body>
</html>