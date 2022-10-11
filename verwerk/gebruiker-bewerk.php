<?php 
include ('../blocks/header.php');
include_once('./database.php');
include_once('../classes/user.php');

if (isset($_POST["submit"])) {
    
    if (
        !empty($_POST["voornaam"])
        && !empty($_POST["achternaam"])
        && !empty($_POST["wachtwoord"])
        && !empty($_POST["geboortedatum"])
        && !empty($_POST["telefoonnummer"])
        && !empty($_POST["adres"])
        && !empty($_POST["postcode"])
        && !empty($_POST["stad"])
    
    ) {
        //allemaal moeten ze true zijn
        $voornaam = $_POST["voornaam"];
        $achternaam = $_POST["achternaam"];
        $email = $_SESSION['user']['email'];
        $wachtwoord = $_POST["wachtwoord"];
        $telefoonnummer = $_POST["telefoonnummer"];
        $geboortedatum = $_POST["geboortedatum"];
        $adres = $_POST["adres"];
        $postcode = $_POST["postcode"];
        $stad = $_POST["stad"];
        
        $user = new User($conn);
        $user->update($voornaam,$achternaam,$email,$wachtwoord,$telefoonnummer,$geboortedatum,$adres,$postcode,$stad);
        mysqli_close($conn); // Sluit de database verbinding
    
    }
    }