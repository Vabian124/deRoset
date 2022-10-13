<?php
include('../blocks/header.php');
include_once('../classes/product.php');
include_once('./database.php');
include_once('./session.php');


$id = $_GET['id'];
$name = $_GET['name'];
$product = new Product($conn);
$idProducts= $product->getById($id);
var_dump($id,$name);
$_SESSION['winkelmandje'][$id] = $idProducts;
var_dump($_SESSION['winkelmandje']);
header('../bestellen.php');





?>







<!-- <script>
    if (!localStorage.getItem("winkelmandje")) {
    localStorage.setItem("winkelmandje", "[]");}
    
    let searchParams = new URLSearchParams(window.location.href);
    let item;
    console.log(searchParams);
    
    foreach (entry in searchParams) {
        console.log(p[0]);console.log(p[1]);console.log(p[2]);console.log(p[3]);
    item = {
        id: p[1],
        name: p[1]

    }
}

    // Pak de huidige notitie object en zet om in leesbaar JSON formaat.
    let huidigeOpslag = JSON.parse(localStorage.getItem("winkelmandje"));

    // winkelmandje localstorage is een array formaat en we voegen een nieuwe notitie toe.
    huidigeOpslag.push(item);

    // huidigeOpslag heeft nu een nieuwe notitie in geheugen en schrijven de "winkelmandje" item over.
    localStorage.setItem("winkelmandje", JSON.stringify(huidigeOpslag));

    

</script> -->