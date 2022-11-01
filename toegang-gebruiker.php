<?php include 'session.php';
if(empty($_SESSION['gebruiker']['rol']))
{
header('location: login.php');
}
