<?php
include_once('../classes/user.php');
$databaseConnection = new Database();
$conn = $databaseConnection->getConnection();

$user = new User($conn);

$user->login($_POST['uid'],$_POST['pwd']);
    