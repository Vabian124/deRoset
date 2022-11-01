<?php
include('../blocks/header.php');
include_once('./database.php');
include_once('../classes/product.php');

if (isset($_POST["submit"])) {

    
        

        //allemaal moeten ze true zijn
        $name = $_POST["name"];
        $price_per_kg = $_POST["price_per_kg"];
        $is_flavor_of_week = $_POST["is_flavor_of_week"];
        $category = $_POST["category"];
        $id = $_GET['id'];
        $product = new Product($conn);
        $product->update($id, $name, $price_per_kg, $is_flavor_of_week, $category);
        mysqli_close($conn); // Sluit de database verbinding
        header("location: ../item-overzicht.php");

    
}