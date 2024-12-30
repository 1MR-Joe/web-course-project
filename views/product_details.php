<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product page</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/product_details.css">
    <script src="../js/product_details.js"></script>
</head>

<body>

    <?php include __DIR__."/../components/header.php"?>

    <div class="main-div">
        <!-- Div image -->
        <div class="product-image">
            <img src="<?php echo $product['image'] ?? __DIR__ . '/../images/products/product.png'; ?>" alt="Product image" width="350px" height="400px">
            <span class="whish_list_heart" onclick="convert_wish_heart()" id="wish_list_heart">
                ♥
            </span>
        </div>
        <div>
            <h2><?php echo $product['name'] ?? "Product Name"; ?></h2>
            <h3><?php echo $product['price_in_cents'] ?? "$49.99" ?></h3>
            <div>
                    <?php
                        $rating = round($product['rating']) ?? 4;
                        for ($i = 1; $i <= 5; $i++) {
                            if ($i <= $rating) {
                                echo '<span class="star star_checked">★</span>';
                            } else {
                                echo '<span class="star">★</span>';
                            }
                        }
                    ?>
            </div>
            <p class="description">
                <?php echo $product['description'] ?? "Lorem ipsum dolor sit amet consectetur adipisicing elit." ?>
            </p>

            <div>
                <label class="qt-label">QT <input type="number" , value="1" class="qt-text"></label>
                <input type="button" value="ADD TO CART" class="card_btn" onclick="">
            </div>
            <div style="background-color: #323232;
                color: white;
                text-align: center;
                padding: 5px;
                margin: 20px 80px 20px 0;
                "
            >
                <input type="button" value="Premium members save to 20% upgrade to premium now" style="background-color: #323232; outline: none; border: none; color: white; ">
            </div>
        </div>
    </div>

    <!-- Div reviews -->
    <div class="reviews-main-div">
        <!--
        **
        review is only once!
        review must be with a rating
        ** -->
        <textarea name="" id="" class="comment_field" placeholder="review as john Doe"></textarea>
        <input type="submit" value="Send" class="card_btn comment_btn">
        <h3 >Reviews</h3>
        
        <div class="review_card">
            <img src="../images/avatars/person1.png" alt="User" width="100px" height="100px" class="review_avatar">
            
            <div class="rating">
                <p class="review_content">Person name</p>
                <div>
                    <span class="star star_checked">★</span>
                    <span class="star star_checked">★</span>
                    <span class="star star_checked">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                </div>

                <pre class="review_content">
                Lorem ipsum dolor sit amet 
                consectetur adipisicing elit.
                </pre>
            </div>
        </div>
        
        <div class="review_card">
            <img src="../images/avatars/person2.png" alt="User" width="100px" height="100px" class="review_avatar">
            
            <div>
                <p class="review_content">Person name</p>
                <div>
                    <span class="star star_checked">★</span>
                    <span class="star star_checked">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                </div>

                <pre class="review_content">
                Lorem ipsum dolor sit amet 
                consectetur adipisicing elit.
                </pre>

            </div>
        </div>
        <div class="review_card">
                <img src="../images/avatars/avatar.png" alt="User" width="100px" height="100px" class="review_avatar">
            
            <div>
                <p class="review_content">Person name</p>
                <div>
                    <span class="star star_checked">★</span>
                    <span class="star star_checked">★</span>
                    <span class="star star_checked">★</span>
                    <span class="star star_checked">★</span>
                    <span class="star">★</span>
                </div>

                <pre class="review_content">
                Lorem ipsum dolor sit amet 
                consectetur adipisicing elit.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Dignissimos, necessitatibus!
                </pre>

            </div>
        </div>
    </div>

    <?php include __DIR__ . '/../components/footer.php' ?>

</body>

</html>