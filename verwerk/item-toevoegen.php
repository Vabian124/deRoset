<?php
include_once('database.php');
include_once('../classes/product.php');
$databaseConnection = new Database();
$conn = $databaseConnection->getConnection();
$product = new Product($conn);
$product->create($_POST['name'], $_POST['price_per_kg'], $_POST['is_product_of_week'], $_POST['category']);
mysqli_close($conn);
