<?php include 'session.php';
if($_SESSION['gebruiker']['rol'] !== "medewerker")
{
header('location: over-ons.php');
}
