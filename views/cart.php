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
            <h2>Fre Shipping for Members.</h2>
            <p>Become a Gym Member for fast and free shipping. Join US or Sign-in</p>
        </div>

        <div class="cart-container" id="cart-container">
            <div class="cart-left">
                <h1 style="margin-bottom: 15px;font-size: 48px;">Cart</h2>
                <div class="product-list">
                    <div class="product-card" id='product-card'>
                        <div class="product-image">
                            <img src="../images/products/product1.png" alt="product image" class='product-img-tag'>
                        </div>
                        <div class="product-info">
                            <div class="product-info-upper">
                                <div class="product-name-price">
                                    <h1 class='product-name'>Product Name</h1>
                                    <h1 class='product-price'>$49.99</h1>
                                </div>
                                <p class="product-description">
                                    Lorem ipsum odor amet, consectetuer adipiscing elit. Aenean suspendisse.
                                </p>
                                <div class="product-preferences">
                                    <table>
                                            <tr><td>
                                                <label>Size: </label>
                                                <select class="size-selector">
                                                    <option value="s">S</option>
                                                    <option value="m">M</option>
                                                    <option value="l">L</option>
                                                    <option value="xl">XL</option>
                                                </select>
                                            </td></tr>
                                            <tr><td>
                                                <label>Color: </label>
                                                <select class="color-selector">
                                                    <option value="red">Red</option>
                                                    <option value="green">Green</option>
                                                    <option value="blue">Blue</option>
                                                </select>
                                            </td></tr>
                                            <tr><td>
                                                <label>Quantity: </label>
                                                <select class="quantity-selector">
                                                    <option value="1">1</option>
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
                                            </td></tr>
                                    </table>
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
                    <p>Subtotal: <span>$90.00</span></p>
                    <p>Estimated Shipping & Handling: <span>$8.00</span></p>
                    <p>Estimated Tax: <span>--</span></p>
                    <p><strong>Total: <span>$98.00</span></strong></p>
                  </div>
                  <div class="checkout-buttons">
                    <button class="checkout-btn">Checkout</button>
                    <button class="paypal-btn">PayPal</button>
                  </div>
                </div>
              </div>
        </div>
    </main>

    <?php include __DIR__ . '/../components/footer.php' ?>
    <script src="../js/cart.js" type="module"></script>
</body>
</html>