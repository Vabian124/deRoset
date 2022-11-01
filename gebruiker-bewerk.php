<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<?php include('./blocks/header.php');
include_once('./verwerk/database.php');
include_once('./classes/user.php');

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

<body>
    <div class="wrapper">
        <div class="side">
            <div class="grid">
                <div class="form">
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
    </div>
</body>

</html>