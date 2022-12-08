const openCart = document.getElementById('little-cart')
const closeCart = document.getElementById('painel-close')
const toggleControllPainel = () => {
    const painel = document.getElementById('painel-little-cart')
    if (!painel.classList.contains('d-painel-open')) {
        painel.classList.add('d-painel-open')
    } else {
        painel.classList.remove('d-painel-open')
    }
}

openCart.addEventListener('click', toggleControllPainel)
closeCart.addEventListener('click', toggleControllPainel)

const finality = document.getElementById('finality')

const finalityBuy = () => {
    window.location.href = "telaFinal.php";
}
finality.addEventListener('click', finalityBuy)

const getUserCart = () => {
    window.localStorage.getItem('user-cart')
}

const saveProductInLocalStore = (name, qtd, value) => {
    const uC = JSON.parse(localStorage.getItem("user-cart") || "[]");

    const p = {name, qtd, value}

    uC.push(p)
    console.log(uC);
    window.localStorage.setItem('user-cart', JSON.stringify(uC))
}


const addItemsInCart = () => {
    const items = window.localStorage.getItem('items-cart')
    const notyCart = document.getElementById('noty-c')
    if(!items){
        window.localStorage.setItem('items-cart', 1)
        notyCart.innerHTML = 1
        notyCart.style.display = 'show'
        return
    } else {
        notyCart.innerHTML = parseInt(items) + 1
    }
    console.log('entrou: ', items)
    window.localStorage.setItem('items-cart', parseInt(items) + 1)
    notyCart.style.display = 'show'
}

const removeItemsInCart = () => {
    const items = window.localStorage.getItem('items-cart')
    const notyCart = document.getElementById('noty-c')
    if(!items){
        window.localStorage.setItem('items-cart', 0)
        notyCart.innerHTML = 0;
        notyCart.style.display = 'none'
        return
    }

    if (parseInt(items) <= 1) {
        window.localStorage.setItem('items-cart', 0)
        notyCart.style.display = 'none'
    } else {
        notyCart.innerHTML = parseInt(items) - 1
        notyCart.style.display = 'show'
        window.localStorage.setItem('items-cart', parseInt(items) - 1)
    }
}



// removeItemsInCart()