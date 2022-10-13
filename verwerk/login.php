<?php
include_once('../classes/user.php');
include_once('./database.php');
$databaseConnection = new Database();
$conn = $databaseConnection->getConnection();

$user = new User($conn);

$user->login($_POST['uid'],$_POST['pwd']);
    