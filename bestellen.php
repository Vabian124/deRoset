<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/gebruiker-overzicht.css">
    <title>Document</title>
</head>
<?php include('./blocks/header.php');
include_once('./verwerk/database.php');
include_once('./classes/product.php');
$products = new product($conn);
$products= $products->getAll();
?>
<br>
<body>
    <?php

    foreach($products as $product)
    {
        
        echo 
        '
        <br><a href="./verwerk/product-bestel.php?id='
        .$product['id']."&name=".$product['name'].'">'.$product['name']." ".$product['price_per_kg']." - "
        .$product['is_flavor_of_week']." - ".$product['category'].'</a><br>';
    }
    ?>
    </div>
</body>
</html>