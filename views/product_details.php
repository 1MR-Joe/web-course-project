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

    <?php require __DIR__."/header.php"?>

    

    <div class="main-div">
        <!-- Div image -->
        <div class="product-image">
            <img src="<?php echo $product['image']?>" alt="Product image" width="350px" height="400px">
            <span class="whish_list_heart" onclick="convert_wish_heart()" id="wish_list_heart">
                ♥
            </span>
        </div>
        <div>
            <h2><?php echo $product['name'] ?></h2>
            <h3><?php echo $product['price_in_cents'] ?></h3>
            <div>
                                  <?php
                    $rating = round($product['rating']);
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
            
<?php 
echo $product['description'];

?>
                
            </p>

            <div>
                <label class="qt-label">QT <input type="number" , value="1" class="qt-text"></label>
                <input type="button" value="ADD TO CART" class="card_btn" onclick="">
            </div>
            <div
                style="background-color: #323232; color: white; margin: 20px; margin-left: 0px ; text-align: center; padding: 5px; margin-right: 80px;">
                <input type="button" value="Premium members save to 20% upgrade to premium now"
                    style="background-color: #323232; outline: none; border: none; color: white; ">
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

    <footer>
        <div class="left_footer">
            <div class="logo lower_logo">
                <img src="../images/gym_logo.png" alt="logo" width="130px" height="100px">
                <h1> Five Gym</h1>
            </div>
            <div class="left_lower_footer">
                <img src="../images/social/facebook.png" alt="icon" width="30px" height="30px">
                <img src="../images/social/instagram.png" alt="icon" width="30px" height="30px">
                <img src="../images/social/whatsapp.png" alt="icon" width="30px" height="30px">
                <img src="../images/social/snapchat.png" alt="icon" width="30px" height="30px">
            </div>
        </div>
        <div class="right_footer">
            <div>
                <a href="#" class="right_footer_links">About us</a>
                <a href="#" class="right_footer_links">Jobs</a>
                <a href="#" class="right_footer_links">Blog</a>
                <a href="#" class="right_footer_links">FAQ</a>
                <a href="#" class="right_footer_links">Privacy policy</a>
            </div>
            <div class="right_footer_lower">
                <img src="../images/social/phone.png" alt="icon" width="30px" height="30px" style="margin-right: 10px; margin-top: 10px;">
                <div class="footer_right_icons">
                    <label>Tel</label>
                    <p>01054874152</p>
                </div>
                <img src="../images/social/email.png" alt="icon" width="30px" height="30px" style="margin-right: 10px; margin-top: 10px;">
                <div class="footer_right_icons">
                    <label>Mail</label>
                    <p>example@gmail.com</p>
                </div>
                <img src="../images/social/location.png" alt="icon" width="30px" height="30px" style="margin-right: 10px; margin-top: 10px;">
                <div class="footer_right_icons">
                    <label>Address</label>
                    <p>5-st Lorem, ipsum dolor.</p>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>