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
$rootDir = realpath($_SERVER["DOCUMENT_ROOT"]);
require "$rootDir\deRoset\\verwerk\session.php";
require "$rootDir\deRoset\\verwerk\database.php";
require "$rootDir\deRoset\\classes\product.php";
$products = new product($conn);
$products = $products->getAll();


if (isset($_SESSION['user']['id']))
    $id = $_SESSION['user']['id'];
$firstname = $_SESSION['user']['firstname'];
$lastname  = $_SESSION['user']['lastname'];
$email = $_SESSION['user']['email'];
$password = $_SESSION['user']['password'];
$date_of_birth = $_SESSION['user']['date_of_birth'];
$phonenumber = $_SESSION['user']['phonenumber'];
$adress = $_SESSION['user']['adress'];
$zipcode = $_SESSION['user']['zipcode'];
$city = $_SESSION['user']['city'];

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    //require toegang.php
    $user = new User($conn);
    $idUser = $user->getById($id);
    var_dump($idUser);
    $firstname = $idUser['firstname'];
    $lastname = $idUser['lastname'];
    $email = $idUser['email'];
    $password = $idUser['password'];
    $date_of_birth = $idUser['date_of_birth'];
    $phonenumber = $idUser['phonenumber'];
    $adress = $idUser['adress'];
    $zipcode = $idUser['zipcode'];
    $city = $idUser['city'];
}

if (!isset($_SESSION['uid'])) {
}

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
    grid-template-rows: 0.1fr 1.7fr;
    gap: 1% 1%;
    grid-auto-flow: row;
    grid-template-areas:
        "header header header"
        "content content content";
    grid-area: main;
}


.header {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
    grid-template-rows: 1fr;
    gap: 1% 1%;
    grid-auto-flow: row;
    grid-template-areas:
        "Over-ons Bestellen Blog Contact Winkelmandje Account";
    grid-area: header;
}

.Account {
    grid-area: Account;
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

.smaak-vd-dag>div {}

html,
body,
.container {
    height: 125%;
    margin: 0;
}

.Footer {
    text-align: center;
}



.container * {
    position: relative;
    border-radius: 15px;
    -moz-border-radius: 15px;
    padding: 2%;
}

div {
    border: 3px solid black;
}


.container *:after {
    font-size: 10px;
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
    grid-template-columns: 0.6fr 0.6fr 1.7fr 1fr 0.6fr;
    grid-template-rows: 0.4fr 1.8fr 0.4fr;
    gap: 1% 3%;
    grid-auto-flow: row;
    grid-template-areas:
        ". Logo main main ."
        ". sidebar main main ."
        ". Footer Footer Footer .";
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
    grid-template-rows: 1fr;
    gap: 1% 1%;
    grid-auto-flow: row;
    grid-template-areas:
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
    grid-template-columns: 1.1fr 0.9fr 1.1fr;
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
    grid-template-rows: 0.2fr 1fr 1fr;
    gap: 1% 1%;
    grid-auto-flow: row;
    grid-template-areas:
        ". textpopsmaken ."
        ". popsmaken ."
        ". popsmaken .";
    grid-area: populaire-smaken;
}

.p50 {
    width: 50%;
}

.imgR {
    align-self: right;
}

.imgL {
    align-self: left;
}

.content {
    border: 3px solid black;
    display: grid;
    grid-auto-columns: 1fr;
    grid-auto-rows: 1fr;
    grid-template-columns: 1.1fr 0.4fr 1.1fr;
    grid-template-rows: 0.2fr 1fr;
    gap: 5px 5px;
    grid-template-areas:
        "title . Logo2"
        "login . register";

}

.login {
    grid-area: login;
}

.register {
    grid-area: register;
}

.title {
    grid-area: title;
}

.Logo2 {
    grid-area: Logo2;
    display: none;
}

.pageTitle {}

.text {
    grid-area: text;

}

.sidebar .img {
    grid-area: img;
    width: 100%;
    border-radius: 50%;
}

.text2 {
    grid-area: text2;
}

.img2 {
    grid-area: img2;
}

.text3 {
    grid-area: text3;
}

p {
    font-size: 20px;
}

a {
    border: 0px solid black;
    text-decoration: none;
}

@media screen and (max-width: 720px) {


    .container {
        display: grid;
        grid-template-columns: 0fr 0fr 1.7fr 1fr 0fr;
        grid-template-rows: 0.4fr 1.8fr 0fr;
        gap: 1% 3%;
        grid-auto-flow: row;
        grid-template-areas:
            ". Logo main main ."
            ". sidebar main main ."
            ". Footer Footer Footer .";
    }


    .sidebar {
        display: none;
    }

    .main {
        grid-template-areas:
            "content content content"
            "header header header";
    }

    .Logo {
        display: none;
    }

    html,
    body,
    .container {
        height: 100%;
        margin: 0;
    }

    .Footer {
        display: none;
    }

    div {
        border: 0px solid black;
    }

    .Logo2 {
        display: grid;
    }

}
</style>

<body>


    <div class="container fifthColor">
        <div class="Logo fourthColor">
            <div class="img"><img src="./img/logo.png" alt="logo" srcset=""></div>
            <div class="imgText">De Roset</div>
        </div>

        <div class="sidebar fourthColor">
            <div class="smaak-vd-dag thirdColor">
                <div class="svdd fourthColor">
                    <p>Smaak van de Dag</p>
                </div>
                <div class="imgsvdd fourthColor"><img class="img" src="./img/22.jpg"></div>
                <div class="bestel fourthColor"><a href="./bestellen.php" style="font-size: 30px;">Bestel!</a></div>
            </div>
            <div class="populaire-smaken thirdColor">
                <div class="textpopsmaken fourthColor">
                    <p>Populaire smaken</p>
                </div>
                <div class="popsmaken thirdColor noOutline">
                    <div class="imgpops1 fourthColor"><img class="img" src="./img/22.jpg"></div>
                    <div class="imgpops2 fourthColor"><img class="img" src="./img/22.jpg"></div>
                    <div class="imgpops3 fourthColor"><img class="img" src="./img/22.jpg"></div>

                </div>

            </div>
        </div>
        <div class="main">
            <div class="header fourthColor">

                <div class="Over-ons"><a href="./over-ons.php">Over ons</a></div>
                <div class="Bestellen"><a href="./bestellen.php">Bestellen</a></div>
                <div class="Blog"><a href="./blog.php">Blog</a></div>
                <div class="Contact"><a href="./contact.php">Contact</a></div>
                <div class="Winkelmandje"><a href="./winkelmandje.php">Winkelmandje</a></div>
                <div class="Account"><a href="./account.php">Account</a></div>
            </div>


            <div class="content thirdColor">

                <div class="title thirdColor noOutline">
                    <h2 class="noOutline thirdColor">Account</h2>

                </div>

                <div class="Logo2">
                    <div class="img"><img src="./img/logo.png" alt="logo" srcset=""></div>
                </div>


                <div class="login form ">
                    <form action="verwerk/login.php" method="post">
                        <div class="item">

                            <div>

                                <p>Gebruikersnaam:</p>
                                <input type="text" name="uid">

                            </div>
                            <div>

                                <p>Wachtwoord:</p>
                                <input type="password" name="pwd">

                            </div>
                            <div>

                                <input type="submit" value="Log in">

                            </div>
                        </div>

                    </form>
                </div>
                <a href="./logout.php" style="color: red;">Log uit</a>
                <a href="./gebruiker-verwijder.php?id=<?php echo $_SESSION['user']['id']; ?> "style="color: red;"> Verwijder account</a>                
                <div class="register form">
                    <form action="verwerk/gebruiker-bewerk.php?id=<?php echo $id ?>" method="post">
                        <div class="form-group">
                            <label for="voornaam">Voornaam</label>
                            <input type="text" name="voornaam" id="voornaam" value='<?php echo $firstname ?>'>
                        </div>
                        <div class="form-group">
                            <label for="achternaam">Achternaam</label>
                            <input type="text" name="achternaam" id="achternaam" value='<?php echo $lastname ?>'>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" disabled="true" name="email" id="email" value='<?php echo $email ?>'>
                        </div>
                        <div class="form-group">
                            <label for="wachtwoord">Wachtwoord</label>
                            <input type="text" name="wachtwoord" id="wachtwoord" value='<?php echo $password ?>'>
                        </div>
                        <div class="form-group">
                            <label for="geboortedatum">Geboortedatum</label>
                            <input type="date" name="geboortedatum" id="geboortedatum"
                                value='<?php echo $date_of_birth ?>'>
                        </div>

                        <div class="form-group">
                            <label for="telefoonnummer">Telefoonnummer</label>
                            <input type="text" name="telefoonnummer" id="telefoonnummer"
                                value='<?php echo $phonenumber ?>'>
                        </div>

                        <div class="form-group">
                            <label for="adres">Adres</label>
                            <input type="text" name="adres" id="adres" value='<?php echo $adress ?>'>
                        </div>

                        <div class="form-group">
                            <label for="postcode">Postcode</label>
                            <input type="text" name="postcode" id="postcode" value='<?php echo $zipcode ?>'>
                        </div>

                        <div class="form-group">
                            <label for="stad">Stad</label>
                            <input type="text" name="stad" id="stad" value='<?php echo $city ?>'>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" name="submit">Bewerk</button>

                        </div>

                    </form>
                </div>



            </div>
        </div>
        <div class="Footer fourthColor">
            <div class="info thirdColor">
                <p>Ons Adres
                    Castricumseweg, Castricum<br>
                    in Castricum 2890<br>
                    daar<br>
                </p>
            </div>
            <div class="bezorggebieden thirdColor">
                <p>we bezorgen in<br>
                    den helder<br>
                    schagen<br>
                    schoorl
                </p>
            </div>
            <div class="onze-voorwaarden thirdColor">
                <p>Onze Voorwaarden<br>
                    hoge bezorgkosten<br>
                    privayverkklaring<br>

                </p>
            </div>

        </div>
    </div>
</body>

</html>