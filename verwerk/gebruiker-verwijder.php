<?php 
include_once ('../blocks/header.php');
include_once('./database.php');
include_once('../classes/user.php');
$user = new User($conn);
        $user->delete($_SESSION['user']['email']);
        mysqli_close($conn); // Sluit de database verbinding