<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>

<?php include '../php/config.php' ?>

    <h1>Test page</h1>
    
    <?php
        $sql = 'SELECT * FROM categories WHERE id = 1';
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo $row['name'] . '<br>';
            }
        } else {
            echo 'No results';
        }
    ?>
</body>
</html>