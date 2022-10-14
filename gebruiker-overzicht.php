<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/gebruiker-overzicht.css">
    <title>Document</title>
</head>
<?php include('./blocks/header.php');
include_once('./verwerk/database.php');
include_once('./classes/user.php');
$users = new User($conn);
$users = $users->getAll();
?>
<br>

<body>
    <a href="./gebruiker-toevoegen.php" style="background-color:green">gebruiker toevoegen</a><br><br>
    <?php

    foreach ($users as $user) {
        var_dump($user['id']);
        echo '<br><a href="./gebruiker-bewerk.php?id='
            . $user['id'] . '">' . $user['firstname'] . " " . $user['lastname'] . " - "
            . $user['email'] . " - " . $user['city'] . '</a><br>
        <a style="background-color:red;" href="./gebruiker-verwijder.php?id=' . $user['id'] . '">Verwijder</a><br>';
    }
    ?>
    </div>
</body>

</html>