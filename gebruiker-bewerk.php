<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
        <title>Home</title>
</head>
<?php include('./blocks/header.php'); 
if(!isset($_SESSION['uid']))
{
    header('./index.php');
    
}

?>

<body>
    <div class="wrapper">
        <div class="side"> 
            <div class="grid">
                    <div class="form">
                    <form action="verwerk/gebruiker-bewerk.php" method="post">
    <div class="form-group">
        <label for="voornaam">Voornaam</label>
        <input type="text" name="voornaam" id="voornaam" value='<?php echo $_SESSION['user']['firstname']?>'>
    </div>
    <div class="form-group">
        <label for="achternaam">Achternaam</label>
        <input type="text" name="achternaam" id="achternaam" value='<?php echo $_SESSION['user']['lastname']?>'>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" disabled="true" name="email" id="email" value='<?php echo $_SESSION['user']['email']?>'>
    </div>
    <div class="form-group">
        <label for="wachtwoord">Wachtwoord</label>
        <input type="text" name="wachtwoord" id="wachtwoord" value='<?php echo $_SESSION['user']['password']?>'>
    </div>
    <div class="form-group">
        <label for="geboortedatum">Geboortedatum</label>
        <input type="date" name="geboortedatum" id="geboortedatum" value='<?php echo $_SESSION['user']['date_of_birth']?>'>
    </div>

    <div class="form-group">
        <label for="telefoonnummer">Telefoonnummer</label>
        <input type="text" name="telefoonnummer" id="telefoonnummer" value='<?php echo $_SESSION['user']['phonenumber']?>'>
    </div>

    <div class="form-group">
        <label for="adres">Adres</label>
        <input type="text" name="adres" id="adres" value='<?php echo $_SESSION['user']['adress']?>'>
    </div>

    <div class="form-group">
        <label for="postcode">Postcode</label>
        <input type="text" name="postcode" id="postcode" value='<?php echo $_SESSION['user']['zipcode']?>'>
    </div>

    <div class="form-group">
        <label for="stad">Stad</label>
        <input type="text" name="stad" id="stad" value='<?php echo $_SESSION['user']['city']?>'>
    </div>
  

    <div class="form-group">
        <button type="submit" class="btn btn-primary" name="submit">Bewerk</button>

    </div>

</form>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>