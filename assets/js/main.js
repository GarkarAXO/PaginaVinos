//Menu active
const activePage = window.location.pathname;
const navLinks = document.querySelectorAll('nav a').forEach(link => {
  if(link.href.includes(`${activePage}`)){
    link.classList.add('active');
  }
});


//Menú de navegacion
const navToggle = document.querySelector(".nav-toggle")
const navMenu = document.querySelector(".nav-menu")

navToggle.addEventListener("click", () =>{
    navMenu.classList.toggle("nav-menu_visible");

    if (navMenu.classList.contains("nav-menu-visible")){
        navToggle.setAttribute("aria-label", "Cerrar menú");
    } else{
    navToggle.setAttribute("aria-label", "Abrir menú");
    }
});

//Productos Detalles
let bigImg = document.querySelector('.big-img');
let smallImg = document.querySelectorAll('.small-img');

smallImg.forEach((img)=>{
    img.addEventListener('click', function (ev) {
        let imgClicked = ev.target;
        bigImg.src = imgClicked.src;
    })
});

//Carrusel 
const productContainers = [...document.querySelectorAll('.product-container')];
const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
const preBtn = [...document.querySelectorAll('.pre-btn')];

productContainers.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
    })

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    })
});


//Carrito de compras
let cartIcon = document.querySelector('#carrito-icon');
let cart = document.querySelector('.cart');
let closeCart = document.querySelector('#close__cart');

cartIcon.onclick = () =>{
    cart.classList.add("active");
};

closeCart.onclick = () =>{
    cart.classList.remove("active");
};

if (document.readyState == 'loading'){
    document.addEventListener('DOMContentLoaded', ready);
} else {
    ready();
}

function ready(){
    var reomveCartButtons = document.getElementsByClassName("cart__remove");
    console.log(reomveCartButtons);
    for(var i = 0; i < reomveCartButtons.length; i++){
        var button = reomveCartButtons[i];
        button.addEventListener("click", removeCartItem);
    }

    var cantidadInputs = document.getElementsByClassName("cart__cantidad");
    for(var i = 0; i < cantidadInputs.length; i++){
        var input = cantidadInputs[i];
        input.addEventListener("change", cantidadChanged);
    }

    var addCart = document.getElementsByClassName("btn-agregar");
    for(var i = 0; i < addCart.length; i++){
        var button = addCart[i];
        button.addEventListener("click", addCartClicked);
    }
}
  
function removeCartItem(event){
    var buttonClicked = event.target;
    buttonClicked.parentElement.remove();
    updatetotal();
}

function cantidadChanged(event){
    var input = event.target;
    if (isNaN(input.value) || input.value <= 0){
        input.value = 1;
    }
    updatetotal();
}

function addCartClicked(event) {
    var button = event.target;
    var shopProducts = button.parentElement;
    var titulo = shopProducts.getElementsByClassName("product-title")[0].innerText;
    var price = shopProducts.getElementsByClassName("precio")[0].innerText;
    var productImg = shopProducts.getElementsByClassName("vino-bottle")[0].src;
    addProductToCart(titulo, price, productImg);
    updatetotal();
}

function addProductToCart(titulo, price, productImg){
    var cartShopBox = document.createElement("div");
    cartShopBox.classList.add("cart__box");
    var cartItems = document.getElementsByClassName("cart__content")[0];
    var cartItemsNames = cartItems.getElementsByClassName("cart__product__title");
    for (var i = 0; i < cartItemsNames.length; i++){
        if (cartItemsNames[i].innerText == titulo){
            alert("El producto se ha añadido");
            return;
        }
    }

var cartBoxContent = `
                            <img src="/assets/images/productos vinos/bornosVendejo/BornosVendejo.jpg" alt="" class="cart__img">
                            <div class="details__box">
                                <div class="cart__product__title">Bornos Vendejo</div>
                                <div class="cart__price">$328.00</div>
                                <input type="number" value="1" class="cart__cantidad">
                            </div>
                            <!--Remover del carrito-->
                            <i class="fa-solid fa-trash cart__remove"></i>`;
cartShopBox.innerHTML = cartBoxContent;
cartItems.append(cartShopBox);
cartShopBox.getElementsByClassName("cart__remove")[0].addEventListener("click", removeCartItem);
cartShopBox.getElementsByClassName("cart__cantidad")[0].addEventListener("change", cantidadChanged);
}

function updatetotal(){
    var cartContent = document.getElementsByClassName("cart__content")[0];
    var cartBoxes = cartContent.getElementsByClassName("cart__box");
    var total = 0;
    for(var i = 0; i < cartBoxes.length; i++){
        var cartBox = cartBoxes[i];
        var priceElement = cartBox.getElementsByClassName("cart__price")[0];
        var cantidadElement = cartBox.getElementsByClassName("cart__cantidad")[0];
        var precio = parseFloat(priceElement.innerText.replace("$", ""));
        var cantidad = cantidadElement.value;
        total = total + (precio * cantidad);
        total = Math.round(total * 100) / 100;

        document.getElementsByClassName("total__price")[0].innerText = "$" + total;
    }
}