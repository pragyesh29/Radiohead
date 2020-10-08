<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
    <link rel="stylesheet" href="cart.css">
    <title>Cart</title>
</head>
<body>
    <!-- navigation -->
    <nav class="navbar">
        <div class="navbar-center">
            <div class="cart-btn">
                <span class="nav-icon">
                    <i class="fas fa-shopping-cart"></i>
                </span>
                <div class="cart-items">0</div>
            </div>
            <h3>RADIOHEAD</h3>
            <span class="nav-icon">
                <i class="fas fa-bars"></i>
            </span>
        </div>
    </nav>
    <!-- end of navigation -->
    <!-- hero section -->
    <header class="hero">
        <div class="banner">
            <h1 class="banner-title">Merch for you</h1>
            <button class="banner-btn">shop now</button>
        </div>
    </header>
    <!-- end of hero section -->
    <!-- products -->
    <section class="products">
        <div class="section-title">
            <h2>Our Products</h2>
        </div>
        <div class="products-center">
            <!-- single product -->
            <!-- <article class="product">
                <div class="img-container">
                    <img src="images/store/Kid A.jpg" alt="" class="product-img">
                    <button class="bag-btn" data-id-1>
                        <i class="fas fa-shopping-cart"></i>
                        add to cart
                    </button>
                </div>
                <h3>T-shirt</h3>
                <h4>$16</h4>
            </article> -->
            <!-- end of single product -->
        </div>
    </section>
    <!-- end of products -->
    <!-- cart -->
    <div class="cart-overlay">
        <div class="cart">
            <span class="close-cart">
                <i class="fas fa-window-close"></i>
            </span>
            <h2>cart</h2>
            <div class="cart-content">
                <!-- cart item -->

                <!-- <div class="cart-item">
                    <img src="images/store/bsi_radi10.jpg" alt="tee">
                    <div>
                        <h4>T-shirt</h4>
                        <h5>$16</h5>
                        <span class="remove-item">remove</span>
                    </div>
                    <div>
                        <i class="fas fa-chevron-up"></i>
                        <p class="item-amount">1</p>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div> -->

                <!-- end of cart item -->
            </div>
            <div class="cart-footer">
                <h3>your total : <span class="cart-total">0</span></h3>
                <div class="check-clear">
                    <button class="clear-cart">clear cart</button>
                    <a href="login.php"><button class="checkout">Checkout</button></a>
                </div>
            </div>
        </div>
    </div>
    <!-- end of cart -->
    <!-- footer -->
    <footer class="text-center py-5">
        &copy; Radiohead 2020
    </footer>
    <!-- end of footer -->
    <script src="cart.js"></script>
</body>
</html>