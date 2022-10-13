<?php
include_once('./classes/order.php');
include_once('./verwerk/database.php');
include_once('./verwerk/session.php');
include('./blocks/header.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
        <title>Home</title>
</head>

<body>
    <form action="./verwerk/bestelling-doorvoeren.php?continue=yes" method="post">
    <div class="rendered-form">
    <div class="">
        <label for=" " class="formitem">Voornaam</label>
        <input type="text" class="form-control" access="false" value="Fabian" name="firstname">
    </div>
    <div class="">
        <label for="lastname" class="formitem">Achternaam</label>
        <input type="text" class="form-control" access="false" value="St" name="lastname">
    </div>
    <div class="">
        <label for="adress" class="formitem">Adres</label>
        <input type="text" class="form-control" access="false" value="MNDL 11"  name="adress">
    </div>
    <div class="">
        <label for="zipcode" class="formitem">Postcode</label>
        <input type="text" class="form-control" access="false" value="2766AB" name="zipcode">
    </div>
    <div class="">
        <label for="city" class="formitem">Stad
            <br>
        </label>
        <input type="text" class="form-control" access="false" value="Stadje" name="city">
    </div>
    <div class="">
        <label for="mvv" class="formbuilder-select-label">Manier van verkrijgen
            <br>
        </label>
        <select class="form-control" name="wayOfRecieving">
            <option value="pickup" selected="true">Afhalen</option>
            <option value="delivery" >Bezorgen</option>
        </select>
    </div>
    <div class="">
        <label for="dateOfRecieving" class="formbuilder-date-label">Datum van bezorgen/afhalen
            <br>
        </label>
        <input type="datetime" class="form-control" access="false" value="2022-10-06" name="dateOfRecieving">
    </div>
    <div class="">
        <button type="submit"  access="false">Afronden en Betalen
            <br>
        </button>
    </div>
</div>


    
    </form>
    
    
    
    
    
    
    
    
    

</body>
</html>