<?php

include('./blocks/header.php');
include_once('./verwerk/database.php');
include_once('./classes/product.php');
$id = $_GET['id'];
$product = new Product($conn);
$product->delete($id);
mysqli_close($conn); // Sluit de database verbinding
