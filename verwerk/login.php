<?php
include_once('../classes/user.php');
include_once('./database.php');
$rootDir = realpath($_SERVER["DOCUMENT_ROOT"]);
require "$rootDir\deRoset\\verwerk\session.php";
$databaseConnection = new Database();
$conn = $databaseConnection->getConnection();

$user = new User($conn);
$user->login($_POST['uid'], $_POST['pwd']);

    header("location: ../bestellen.php");
  