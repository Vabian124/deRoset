<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<?php include('./blocks/header.php'); ?>

<body>
    <div class="wrapper">
        <div class="side">
            <div class="grid">
                <div class="form">
                    <form action="verwerk/login.php" method="post">
                        <div class="item">

                            <div>

                                <p>Gebruikersnaam:</p>
                                <input type="text" name="uid">

                            </div>
                            <div>

                                <p>Wachtwoord:</p>
                                <input type="password" name="pwd">

                            </div>
                            <div>

                                <input type="submit" value="Log in">

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>