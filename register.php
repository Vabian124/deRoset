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
                    <form action="verwerk/register.php" method="post">
    <div class="form-group">
        <label for="voornaam">Voornaam</label>
        <input type="text" name="voornaam" id="voornaam">
    </div>
    <div class="form-group">
        <label for="achternaam">Achternaam</label>
        <input type="text" name="achternaam" id="achternaam">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
    </div>
    <div class="form-group">
        <label for="wachtwoord">Wachtwoord</label>
        <input type="text" name="wachtwoord" id="wachtwoord">
    </div>
    <div class="form-group">
        <label for="geboortedatum">Geboortedatum</label>
        <input type="date" name="geboortedatum" id="geboortedatum">
    </div>

    <div class="form-group">
        <label for="telefoonnummer">Telefoonnummer</label>
        <input type="text" name="telefoonnummer" id="telefoonnummer">
    </div>

    <div class="form-group">
        <label for="adres">Adres</label>
        <input type="text" name="adres" id="adres">
    </div>

    <div class="form-group">
        <label for="postcode">Postcode</label>
        <input type="text" name="postcode" id="postcode">
    </div>

    <div class="form-group">
        <label for="stad">Stad</label>
        <input type="text" name="stad" id="stad">
    </div>
  

    <div class="form-group">
        <button type="submit" class="btn btn-primary" name="submit">Registreer</button>

    </div>

</form>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>