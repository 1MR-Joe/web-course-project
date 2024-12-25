<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/products.css">
    <title>Products</title>
</head>
<body>
    <?php include __DIR__ . '/header.php' ?>

    <main>
        <div class="metadata-section">
            <div>
                <h1>Products</h1>
                <p style="color: gray;">43 products</p>
            </div>
    
            <div class="filters">
                <select name="category-selector" id="category-selector">
                    <option>Select Category</option>
                </select>
                <select name="sort-selector" id="sort-selector">
                    <option value="">recommended</option>
                    <option value="">new arrival</option>
                    <option value="">lowest price</option>
                    <option value="">highest price</option>
                </select>
            </div>
        </div>

        <div class="products-container" id="products-container"></div>
    </main>

    <?php include __DIR__ . '/footer.php' ?>
    
    <div class="hidden product-card" id="product-card">
        <div class="card-left">
        </div>
        <div class="card-right">
            <div class="product-info">
                <h2 class="product-name">Lorem Ipsum Sit</h2>
                <p class="product-description">shirts and sweaters</p>
            </div>
            <h2>
                <span class="dolor-sign">$</span>
                <span class="product-price">49.99</span>
            </h2>
            <div class="action">
                <a href="product_details.html">
                    <div class="buy-button">
                        <button type="button">Buy Now!</button>
                        <div>&rarr;</div>
                    </div>
                </a>
                <button type="button" class="favorite-button">
                    <div>text</div>
                </button>
            </div>
        </div>
    </div>
    <script type="module" src="../js/products.js"></script>
</body>
</html>