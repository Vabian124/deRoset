<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="style/gebruiker-overzicht.css">-->
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<?php 
include_once('./verwerk/database.php');
include_once('./classes/product.php');
$products = new product($conn);
$products= $products->getAll();
?>
<br>
<style>
.container {  display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-template-rows: 0.6fr 1.6fr 0.8fr;
    gap: 0px 0px;
    grid-auto-flow: row;
    grid-template-areas:
      "Logo header header"
      "sidebar content content"
      "Footer Footer Footer";
  }
  
  .Logo { grid-area: Logo; }
  
  .Footer {  display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-template-rows: 1fr 1fr 1fr;
    gap: 0px 0px;
    grid-auto-flow: row;
    grid-template-areas:
      "info bezorggebieden onze-voorwaarden"
      "info bezorggebieden onze-voorwaarden"
      "info bezorggebieden onze-voorwaarden";
    grid-area: Footer;
  }
  
  .info { grid-area: info; }
  
  .bezorggebieden { grid-area: bezorggebieden; }
  
  .onze-voorwaarden { grid-area: onze-voorwaarden; }
  
  .sidebar {  display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-template-rows: 1fr 1fr 1fr;
    gap: 0px 0px;
    grid-auto-flow: row;
    grid-template-areas:
      "smaak-vd-dag smaak-vd-dag smaak-vd-dag"
      "populaire-smaken populaire-smaken populaire-smaken"
      "populaire-smaken populaire-smaken populaire-smaken";
    grid-area: sidebar;
  }
  
  .smaak-vd-dag { grid-area: smaak-vd-dag; }
  
  .populaire-smaken { grid-area: populaire-smaken; }
  
  .header { grid-area: header; }
  
  .content {  display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-template-rows: 1fr 1fr 1fr;
    gap: 0px 0px;
    grid-auto-flow: row;
    grid-template-areas:
      ". . ."
      ". . ."
      ". . .";
    grid-area: content;
  }
  
  
  html, body , .container {
    height: 100%;
    margin: 0;
  }
  
  /* For presentation only, no need to copy the code below */
  
  .container * {
    border: 1px solid red;
    position: relative;
  }
  
  .container *:after {
    content:attr(class);
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: grid;
    align-items: center;
    justify-content: center;
  }
  
  

</style>
<body>
    

<div class="container">
    <div class="Logo">logo</div>
    <div class="header"><?php include('./blocks/header.php'); ?></div>
    <div class="content">

    <?php

    foreach($products as $product)
    {
        
        echo '<div class=item>
        <a href="./verwerk/product-bestel.php?id='
        .$product['id']."&name=".$product['name'].'">'.$product['name']." ".$product['price_per_kg']." - "
        .$product['is_flavor_of_week']." - ".$product['category'].'</a></div>';
    }
    ?>

    </div>
    <div class="sidebar">
        <div class="smaak-vd-dag">svdd</div>
        <div class="populaire-smaken">popsmaak</div>
    </div>
    <div class="Footer">
      <div class="info">info</div>
      <div class="bezorggebieden">bezorggebieden</div>
      <div class="onze-voorwaarden">onze voorwaarden</div>
    </div>
</div>
    </div>
</body>
</html>