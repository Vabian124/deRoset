<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/Bestelling-overzicht.css">
    <title>Document</title>
</head>
<?php include('./blocks/header.php');
include_once('./verwerk/database.php');
include_once('./classes/order.php');
include_once('./classes/product.php');
$orders = new Order($conn);
$allOrders= $orders->getAll();
$product = new Product($conn);


?>
<br>
<body>
    <?php
    foreach($allOrders as $order)
    {
        $id=$order['id'];
        if($order['isRecieved']=="0"){$isRecieved = "No";}else{$isRecieved = "Yes";}

        echo '<a href="./bestelling-detail.php?id='.$id.'">'.$product->getById($id).
        " - ".$order['price_per_kg']."/kg - ".$isRecieved." - ".$order['category'].
        '</a><br><a style="background-color:red;" href="./Bestelling-verwijder.php?id='
        .$order['id'].'">Verwijder</a><br>';
    }
    ?>
    </div>
</body>
</html>