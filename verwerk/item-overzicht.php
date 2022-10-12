<?php

require_once('../classes/product.php');
require_once('./database.php');
$products = new Product($conn);
$products = $products->getall();
