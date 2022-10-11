<?php

require_once('product.php');
$products = new Product($conn);
$products = $products->getall();
foreach($products as $product)
{
    var_dump($product['id']);
    
    //id 	name 	cost_price 	selling_price 	category 	
}
