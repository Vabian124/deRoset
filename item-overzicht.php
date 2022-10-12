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
?>
<br>
<body>
    <a href="./item-toevoegen.php" style="background-color:green">Item toevoegen</a><br><br>
    <?php
    foreach($allProducts as $product)
    {
        if($product['is_flavor_of_week']=="0"){$is_fow = "No";}else{$is_fow = "Yes";}

        echo '<a href="./item-bewerk.php?id='.$product['id'].'">'.$product['name']." - ".$product['price_per_kg']."/kg - ".$is_fow." - ".$product['category'].'</a><br><a style="background-color:red;" href="./item-verwijder.php?id='.$product['id'].'">Verwijder</a><br>';
    }
    ?>
    </div>
</body>
</html>