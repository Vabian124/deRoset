<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<?php
include_once('../verwerk/database.php');
include_once('../classes/product.php');
$products = new product($conn);
$products = $products->getAll();
?>
<br>
<style>


    .popsmaken {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-template-rows: 1fr 1fr 1fr;
        gap: 1% 1%;
        grid-auto-flow: row;
        grid-template-areas:
            "imgpops1 imgpops1 imgpops1"
            "imgpops2 imgpops2 imgpops2"
            "imgpops3 imgpops3 imgpops3";
        grid-area: popsmaken;
    }

    .imgpops1 {
        grid-area: imgpops1;
    }

    .imgpops2 {
        grid-area: imgpops2;
    }

    .imgpops3 {
        grid-area: imgpops3;
    }

    .textpopsmaken {
        grid-area: textpopsmaken;
    }

    .main {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-template-rows: 0.3fr 1.7fr;
        gap: 1% 1%;
        grid-auto-flow: row;
        grid-template-areas:
            "header header header"
            "content content content";
        grid-area: main;
    }
    @media screen and(max-width:1000px)
    {
        .container{
            grid-template-columns: 0fr 1fr 1fr;
        grid-template-rows: 0.3fr 1.7fr;
        }
    }
    .header {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
        grid-template-rows: 1fr;
        gap: 1% 1%;
        grid-auto-flow: row;
        grid-template-areas:
            "Over-ons Bestellen Blog Contact Winkelmandje";
        grid-area: header;
    }

    .Over-ons {
        grid-area: Over-ons;
    }

    .Bestellen {
        grid-area: Bestellen;
    }

    .Blog {
        grid-area: Blog;
    }

    .Contact {
        grid-area: Contact;
    }

    .Winkelmandje {
        grid-area: Winkelmandje;
    }

    .content {
        grid-area: content;
    }


    html,
    body,
    .container {
        height: 100%;
        margin: 0;
    }

    /* For presentation only, no need to copy the code below */

    .container * {
        border: 1px solid red;
        position: relative;
    }

    .container *:after {
        /*content: attr(class);*/
        font-size: 20px;
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
        <div class="Logo">
            <div class="img"><img src="./logo.png" alt="logo" srcset=""></div>
            <div class="imgText">De Roset</div>
        </div>
        <div class="Footer">
            <div class="info">
                <p>Ons Adres
                        Castricumseweg, Castricum<br>
                        in Castricum 2890<br>
                        daar<br>
            </p>
        </div>
            <div class="bezorggebieden">
                Bezorginfo
            </div>
            <div class="onze-voorwaarden"> Zie hier onze voorwaarden</div>
           
        </div>
        <div class="sidebar">
            <div class="smaak-vd-dag">
                <div class="svdd"></div>
                <div class="imgsvdd"></div>
                <div class="bestel"></div>
            </div>
            <div class="populaire-smaken">
                <div class="popsmaken">
                    <div class="imgpops1"></div>
                    <div class="imgpops2"></div>
                    <div class="imgpops3"></div>
                </div>
                <div class="textpopsmaken"></div>
            </div>
        </div>
        <div class="main">
            <div class="header">

            
                <div class="Over-ons"></div>
                <div class="Bestellen"><a href="./bestellen.php">Bestellen</a></div>
                <div class="Blog"></div>
                <div class="Contact"></div>
                <div class="Winkelmandje"><a href="./winkelmandje.php">winkelmandje</a></div>
            </div>
            <div class="content"></div>
        </div>
    </div>
</body>

</html>