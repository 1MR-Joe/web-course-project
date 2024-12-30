<header data-id="$_SESSION['user_id']">
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
                require __DIR__ . '/../components/user-buttons.php';
            } else {
                require __DIR__ . '/../components/auth-buttons.php';
            }
        ?>
    </div>
</header>