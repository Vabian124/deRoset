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
    background-color: #CAE7B9;
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

@media screen and(max-width:1000px) {
    .container {
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
    background-color: #293132;
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
    background-color: #293132;
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
    background-color: #CAE7B9;
}

.smaak-vd-dag>div {
    background-color: #CAE7B9;
}

html,
body,
.container {
    height: 100%;
    margin: 0;
}

.Footer {
    text-align: center;
}

/* For presentation only, no need to copy the code below */

.container * {
    border: 1px solid red;
    position: relative;
}

.container *:after {
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


.container {
    display: grid;
    grid-template-columns: 0.3fr 1.7fr 1fr;
    grid-template-rows: 0.4fr 1.8fr 0.4fr;
    gap: 1% 3%;
    grid-auto-flow: row;
    grid-template-areas:
        "Logo main main"
        "sidebar main main"
        "Footer Footer Footer";
}

.Logo {
    display: grid;
    grid-template-columns: 0.3fr 2.4fr 0.3fr;
    grid-template-rows: 0.3fr 2.2fr 0.5fr;
    gap: 1% 1%;
    grid-auto-flow: row;
    grid-template-areas:
        ". . ."
        ". img ."
        ". imgText .";
    grid-area: Logo;
}

.Logo .img img {
    width: 100%;
}

.img {
    grid-area: img;
}

.imgText {
    grid-area: imgText;
    text-align: center;
}

.Footer {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-template-rows: 1fr 1fr 1fr;
    gap: 1% 1%;
    grid-auto-flow: row;
    grid-template-areas:
        "info bezorggebieden onze-voorwaarden"
        "info bezorggebieden onze-voorwaarden"
        "info bezorggebieden onze-voorwaarden";
    grid-area: Footer;
}

.info {
    grid-area: info;
    display: flex;
    justify-content: center;
    text-align: center;
    text-decoration: none;


}

.footer>div {
    display: flex;
    justify-content: center;
    text-align: left;
    text-decoration: none;
    padding-top: 2%
}

.bezorggebieden {
    grid-area: bezorggebieden;
}

.onze-voorwaarden {
    grid-area: onze-voorwaarden;
}

.sidebar {
    display: grid;
    grid-template-columns: 1fr 0.9fr 1.1fr;
    grid-template-rows: 1.3fr 0.7fr 1fr;
    gap: 1% 1%;
    grid-auto-flow: row;
    grid-template-areas:
        "smaak-vd-dag smaak-vd-dag smaak-vd-dag"
        "populaire-smaken populaire-smaken populaire-smaken"
        "populaire-smaken populaire-smaken populaire-smaken";
    grid-area: sidebar;
}

.smaak-vd-dag {
    display: grid;
    grid-template-columns: 0.3fr 2.4fr 0.3fr;
    grid-template-rows: 1fr 1fr 1fr;
    gap: 1% 1%;
    grid-auto-flow: row;
    grid-template-areas:
        ". svdd ."
        ". imgsvdd ."
        ". bestel .";
    grid-area: smaak-vd-dag;
}

.svdd {
    grid-area: svdd;
}

.imgsvdd {
    grid-area: imgsvdd;
}

.bestel {
    grid-area: bestel;
}

.populaire-smaken {
    display: grid;
    grid-template-columns: 0.3fr 2.4fr 0.3fr;
    grid-template-rows: 1fr 1fr 1fr;
    gap: 1% 1%;
    grid-auto-flow: row;
    grid-template-areas:
        ". textpopsmaken ."
        ". popsmaken ."
        ". popsmaken .";
    grid-area: populaire-smaken;
}
</style>

<body>


    <div class="container">
        <div class="Logo">
            <div class="img"><img src="./logo.png" alt="logo" srcset=""></div>
            <div class="imgText">De Roset</div>
        </div>

        <div class="sidebar">
            <div class="smaak-vd-dag">
                <div class="svdd">Dit is de svdd</div>
                <div class="imgsvdd">img</div>
                <div class="bestel"><button>Bestel</button></div>
            </div>
            <div class="populaire-smaken">
                <div class="textpopsmaken">
                    Dit zijn de popu smaku
                </div>
                <div class="popsmaken">
                    <div class="imgpops1">Framboos</div>
                    <div class="imgpops2">Framboos</div>
                    <div class="imgpops3">Framboos</div>

                </div>

            </div>
        </div>
        <div class="main">
            <div class="header">





                <div class="Over-ons"></div>
                <div class="Bestellen"></div>
                <div class="Blog"></div>
                <div class="Contact"></div>
                <div class="Winkelmandje"></div>
            </div>
            <div class="content">


            </div>
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
                <p>we bezorgen in<br>
                    den helder<br>
                    schagen<br>
                    schoorl
                </p>
            </div>
            <div class="onze-voorwaarden">
                <p>Onze Voorwaarden<br>
                    hoge bezorgkosten<br>
                    privayverkklaring<br>

                </p>
            </div>

        </div>
    </div>
</body>

</html>