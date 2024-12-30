<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership</title>
    <link rel="stylesheet" href="../css/membership.css">
</head>

<body>

    <?php include __DIR__ . '/../components/header.php' ?>
    <h1 class="head_title">Find the perfect membership needs</h1>
    <h1 class="head_title">that suites your needs</h1>


    <form>
        <div class="program_type">
            <label class="type_category selected">Monthly</label>
            <label class="type_category">Daily</label>
        </div>
        <div class="membership_plans">

            <div class="membership_cart">
                <h2>Plan1</h2>
                <p>Lorem ipsum dolor sit amet.</p>
                <p class="price_text">20$</p>
                <input type="button" value="Get started" class="plan_btn">
                <p>Features</p>
                <hr width="250px">
                <ul class="features_block">
                    <li><span>Feature 1</span></li>
                    <li><span>Feature 2</span></li>
                    <li><span>Feature 3</span></li>
                    <li><span>Feature 4</span></li>
                    <li><span>Feature 5</span></li>
                    <li><span>Feature 6</span></li>
                </ul>
            </div>
            <div class="membership_cart">
                <h2>Plan2</h2>
                <p>Lorem ipsum dolor sit amet.</p>
                <p class="price_text">40$</p>
                <input type="button" value="Get started" class="plan_btn">
                <p>Features</p>
                <hr width="250px">
                <ul class="features_block">
                    <li><span>Feature 1</span></li>
                    <li><span>Feature 2</span></li>
                    <li><span>Feature 3</span></li>
                    <li><span>Feature 4</span></li>
                    <li><span>Feature 5</span></li>
                    <li><span>Feature 6</span></li>
                </ul>
            </div>
            <div class="membership_cart">
                <h2>Plan3</h2>
                <p>Lorem ipsum dolor sit amet.</p>
                <p class="price_text">100$</p>
                <input type="button" value="Get started" class="plan_btn">
                <p>Features</p>
                <hr width="250px">
                <ul class="features_block">
                    <li><span>Feature 1</span></li>
                    <li><span>Feature 2</span></li>
                    <li><span>Feature 3</span></li>
                    <li><span>Feature 4</span></li>
                    <li><span>Feature 5</span></li>
                    <li><span>Feature 6</span></li>
                </ul>


            </div>
        </div>
    </form>

    <?php include __DIR__ . '/../components/footer.php' ?>
</body>

</html>