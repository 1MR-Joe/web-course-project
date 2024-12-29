<header>
    <a href="./" class="logo">
        <img src="../images/gym_logo.png" alt="logo" width="110px" height="100px">
        <h1>Five Gym</h1>
    </a>

    <div class="nav-content">
        <div class="navbar">
            <a href="#">About</a>
            <a href="/membership">Membership</a>
            <a href="/products">Products</a>
            <a href="#">Contact</a>
        </div>
        <?php 
            if(isset($_SESSION['user_email'])) {
                echo "<div style='border-radius:100px;color:rgba(0,0,0,0);background-color:black;min-width:50px;aspect-ratio:1/1;'>text</div>";
            } else {
                echo "<div class='authentication-section'><a href='/register'><button type='button' class='button-2'>Register</button></a><a href='/login'><button type='button' class='button-1'>Login</button></a></div>";
            }
        ?>
    </div>
</header>