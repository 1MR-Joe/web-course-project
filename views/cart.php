<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/cart.css">
    <title>Cart</title>
</head>
<body>
    <?php include __DIR__ . '/../components/header.php' ?>
    
    <main>
        <div class="membership-promo">
            <h2>Free Shipping for Members.</h2>
            <p>Become a Gym Member for fast and free shipping. Join US or Sign-in</p>
        </div>

        <div class="cart-container" id="cart-container">
            <div class="cart-left">
                <h1 style="margin-bottom: 15px;font-size: 48px;">Cart</h2>
                <div class="product-list" id="product-list">
                    <!-- products here -->
                </div>
            </div>
            <div class="cart-right">
                <div class="summary">
                  <h3>Summary</h3>
                  <div class="promo">
                    <label for="promo-code">Do you have a Promo Code?</label>
                    <input type="text" id="promo-code" placeholder="Enter Code">
                  </div>
                  <div class="totals">
                    <p>Subtotal: <span>$<span id="subTotal">90.00</span></span></p>
                    <p>Estimated Shipping & Handling: <span>$<span id="shipping">8.00</span></span></p>
                    <p>Estimated Tax: <span>$<span id="tax">--</span></span></p>
                    <p><strong>Total: <span>$<span id="total">98.00</span></span></strong></p>
                  </div>
                  <div class="checkout-buttons">
                    <button class="checkout-btn">Checkout</button>
                    <button class="paypal-btn">PayPal</button>
                  </div>
                </div>
              </div>
        </div>
    </main>

    <div class="product-card hidden" id='product-card'>
                        <div class="product-image">
                            <img src="../images/products/product1.png" alt="product image" class='product-img-tag'>
                        </div>
                        <div class="product-info">
                            <div class="product-info-upper">
                                <div class="product-name-price">
                                    <h1 class='product-name'>Product Name</h1>
                                    <h1><span class="dolor-sign">$</span><span class="product-price">49.99</span></h1>
                                </div>
                                <p class="product-description">Lorem ipsum odor amet, consectetuer adipiscing elit. Aenean suspendisse.</p>
                                <div class="product-preferences">
                                    <label style="margin-right: 10px;">Quantity: </label>
                                    <select class="quantity-selector">
                                        <option value="1" selected>1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                            </div>
                            <div class="product-info-lower">
                                <div class="product-control">
                                    <a href="#">Move to Favorites</a>
                                    <a href="#">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
    <?php include __DIR__ . '/../components/footer.php' ?>
    <script src="../js/cart.js" type="module"></script>
</body>
</html>