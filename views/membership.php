<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership</title>
    <link rel="stylesheet" href="../css/membership.css">
</head>

<body>

    <?php

use Services\PlanService;

 include __DIR__ . '/../components/header.php' ?>
    <h1 class="head_title">Find the perfect membership needs</h1>
    <h1 class="head_title">that suites your needs</h1>


    <form>
        <div class="program_type">
            <label class="type_category selected">Monthly</label>
            <label class="type_category">Daily</label>
        </div>
        <div class="membership_plans">
        <?php
         foreach($plans as $p) {
            $finalPrice = ((int)$p["price_in_cents"] / 100);
            $html = <<<html
                <div class="membership_cart">
                    <h2>{$p["name"]}</h2>
                    <p class="description">{$p["description"]}</p>
                    <p class="price_text">$ {$finalPrice}</p>
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
            html;
            echo $html;
         }   

        ?>
            

        </div>
    </form>

    <?php include __DIR__ . '/../components/footer.php' ?>
</body>

</html>