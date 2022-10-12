<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/item-overzicht.css">
    <title>Document</title>
</head>
<?php include('./blocks/header.php');
include_once('./verwerk/database.php');
include_once('./classes/product.php');
$products = new Product($conn);
$allProducts= $products->getAll();
var_dump($allProducts);
?>
<br>
<body>
    <?php
    foreach($allProducts as $product)
    {
        echo '<a href="./item-bewerk.php?id='.$product['id'].'">'.$product['name'].'</a><br>';
    }
    ?>
    </div>
</body>
</html>