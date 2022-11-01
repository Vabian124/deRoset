<?php

include('./blocks/header.php');
include_once('./verwerk/database.php');
include_once('./classes/order.php');
$id = $_GET['id'];
$order = new Order($conn);
$order->delete($id);
mysqli_close($conn); // Sluit de database verbinding