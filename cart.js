// variables
const cartBtn = document.querySelector('.cart-btn');
const closeCart = document.querySelector('.close-cart');
const clearCart = document.querySelector('.clear-cart');
const cartDOM = document.querySelector('.cart');
const cartOverlay = document.querySelector('.cart-overlay');
const cartItems = document.querySelector('.cart-items');
const cartTotal = document.querySelector('.cart-total');
const cartItem = document.querySelector('.cart-item');
const productsDOM = document.querySelector('.products-center');
const cartContent = document.querySelector('.cart-content');

// cart array
cart = [];
// button array
let buttonDOM = [];
class Products{
    async getProducts(){
        try{
            let result = await fetch("products.json");
            let data = await result.json();
            let products = data.items;
            // console.log(products);
            products = products.map(item => {
                const title = item.fields.title;
                const price = item.fields.price;
                const id = item.sys.id;
                const image = item.fields.image.fields.file.url;
                return {title,price,id,image};
            });
            // console.log(products);
            return products;
        }catch(error){
            console.log(error);
        }
    }
}
class UI{
    displayProducts(products){
        let result = '';
        products.forEach(item => {
            result = `
            <article class="product">
                <div class="img-container">
                    <img src="${item.image}" alt="" class="product-img">
                    <button class="bag-btn" data-id=${item.id}>
                        <i class="fas fa-shopping-cart"></i>
                        add to cart
                    </button>
                </div>
                <h3>${item.title}</h3>
                <h4>$${item.price}</h4>
            </article>
            `;
            productsDOM.innerHTML += result;
        });
    }
    getBagButtons(){
        const buttons = Array.from(document.querySelectorAll('.bag-btn'));
        buttonDOM = buttons;
        buttons.forEach(button =>{
            let id = button.dataset.id;
            let inCart = cart.find((item)=>id === item.id)
            if(inCart){
                button.innerHTML="IN CART";
                button.disabled = true;
            }
            button.addEventListener('click',(event)=>{
                event.target.innerHTML="IN CART";
                event.target.disabled=true;
                // get product from products
                let cartItem = {...Storage.getProduct(id),amount:1};
                // add product to cart array
                cart = [...cart,cartItem];
                // save cart array to localstorage
                Storage.saveCart(cart);
                // set cart values
                this.setCartValues(cart);
                // display cart items
                this.addCartItem(cartItem);
                // show in cart
                this.showCart();
                // close cart on clicking the cross
            })
        })
    }
    setCartValues(cart){
        let tempTotal = 0;
        let itemsTotal = 0;
        cart.forEach(item =>{
            tempTotal += item.price*item.amount;
            itemsTotal += item.amount;
        })
        cartTotal.innerHTML=parseFloat(tempTotal.toFixed(2));
        cartItems.innerHTML=itemsTotal;
    }
    addCartItem(item){
        let div = document.createElement('div');
        div.classList.add('cart-item');
        div.innerHTML = `
            <img src="${item.image}" alt="tee">
            <div>
                <h4>${item.title}</h4>
                <h5>$${item.price}</h5>
                <span class="remove-item" data-id=${item.id}>remove</span>
            </div>
            <div>
                <i class="fas fa-chevron-up" data-id=${item.id}></i>
                <p class="item-amount">${item.amount}</p>
                <i class="fas fa-chevron-down" data-id=${item.id}></i>
            </div>
        `;
        cartContent.appendChild(div);
    }
    showCart(){
        cartOverlay.classList.add('transparentBcg');
        cartDOM.classList.add('showcart');
    }
    setupAPP(){
        cart = Storage.getCart();
        this.setCartValues(cart);
        this.populate(cart);
    }
    hideCart(){
        cartOverlay.classList.remove('transparentBcg');
        cartDOM.classList.remove('showcart');
    }
    populate(cart){
        cart.forEach(item=> this.addCartItem(item));
        closeCart.addEventListener('click',this.hideCart);
        cartBtn.addEventListener('click',this.showCart);
    }
    cartLogic(){
        // clear cart button
        clearCart.addEventListener('click',()=>{
            this.clearCart();
        })
        // cart functionality
        cartContent.addEventListener('click',(event)=>{
            if(event.target.classList.contains('remove-item')){
                let removeItem = event.target;
                let id = removeItem.dataset.id;
                cartContent.removeChild(removeItem.parentElement.parentElement);
                this.removeItem(id);
            }else if(event.target.classList.contains('fa-chevron-up')){
                let addamount = event.target;
                let id = event.target.dataset.id;
                let cartItem = cart.find(item => item.id === id);
                cartItem.amount++;
                Storage.saveCart(cart);
                this.setCartValues(cart);
                addamount.nextElementSibling.innerText = cartItem.amount;
            }else if(event.target.classList.contains('fa-chevron-down')){
                let loweramount = event.target;
                let id = event.target.dataset.id;
                let cartItem = cart.find(item => item.id === id);
                cartItem.amount--;
                if(cartItem.amount>0){
                    Storage.saveCart(cart);
                    this.setCartValues(cart);
                    loweramount.previousElementSibling.innerText = cartItem.amount;
                }else{
                    cartContent.removeChild(loweramount.parentElement.parentElement);
                    this.removeItem(id);
                }
            }
        })
    }
    clearCart(){
        let cartItem = cart.map(item => item.id);
        cartItem.forEach(id => this.removeItem(id));
        while(cartContent.children.length>0){
            cartContent.removeChild(cartContent.children[0]);
        }
        this.hideCart();
    }
    removeItem(id){
        cart = cart.filter(item => item.id !== id);
        this.setCartValues(cart);
        Storage.saveCart(cart);
        let button = this.getSingleButton(id);
        button.innerHTML=`<i class="fas fa-shopping-cart"></i>add to cart"`;
        button.disabled=false;
    }
    getSingleButton(id){
        return buttonDOM.find(btn => btn.dataset.id === id);
    }
}
class Storage{
    static saveProducts(products){
        localStorage.setItem("products",JSON.stringify(products));
    }
    static getProduct(id){
        let product = JSON.parse(localStorage.getItem('products'));
        return product.find(item => item.id === id);
    }
    static saveCart(cart){
        localStorage.setItem("cart",JSON.stringify(cart));
    }
    static getCart(){
        return (localStorage.getItem("cart"))?JSON.parse(localStorage.getItem("cart")):[];
    }
}
document.addEventListener('DOMContentLoaded',()=>{
    const products = new Products();
    const ui = new UI();
    // set up application
    ui.setupAPP();
    // get all products
    products.getProducts().then(products => {
        ui.displayProducts(products);   
        Storage.saveProducts(products);
    }).then(() =>{
        ui.getBagButtons();
        ui.cartLogic();
    })
})