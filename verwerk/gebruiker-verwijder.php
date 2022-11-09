<?php
include_once('../blocks/header.php');
include_once('./database.php');
include_once('../classes/user.php');
$user = new User($conn);
if(isset($_GET['id']))
{
    $user->delete($_GET['id']);
}
else if (isset($_SESSION['user']['id']))
{
    $user->delete($_SESSION['user']['id']);
}

mysqli_close($conn); // Sluit de database verbinding
header("location: ../gebruiker-overzicht.php");