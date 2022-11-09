<?php
include_once('./classes/user.php');
include_once('./verwerk/database.php');
$rootDir = realpath($_SERVER["DOCUMENT_ROOT"]);
require "$rootDir\deRoset\\verwerk\session.php";
$databaseConnection = new Database();
$conn = $databaseConnection->getConnection();

$user = new User($conn);
$user->logout();
header("location: ./bestellen.php");