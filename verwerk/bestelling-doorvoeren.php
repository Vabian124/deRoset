<?php
include_once('../classes/order.php');
include_once('./database.php');
include_once('./session.php');
include('../blocks/header.php');

if (isset($_GET['continue'])) {
    $databaseConnection = new Database();
    $conn = $databaseConnection->getConnection();
    $order = new Order($conn);

    $user_id = $_SESSION['user']['id'];
    foreach ($_SESSION['winkelmandje'] as $item) {


        $product_id = $item['id'];
        $wayOfRecieving = $_POST['wayOfRecieving'];
        if ($wayOfRecieving == "pickup") {
            $pickup = $_POST['dateOfRecieving'];
            $delivery = "0000-00-00 00:00:00";
        } else {
            $delivery = $_POST['dateOfRecieving'];
            $pickup = "0000-00-00 00:00:00";
        }
        $isRecieved = 0;
        $zipcode = $_POST['zipcode'];
        $adress = $_POST['adress'];
        $city = $_POST['city'];
        $amount_of_kg = 1;

        $order->create(
            $user_id,
            $product_id,
            $pickup,
            $delivery,
            $isRecieved,
            $zipcode,
            $adress,
            $city,
            $amount_of_kg
        );
    }
    mysqli_close($conn);
    unset($_SESSION['winkelmandje']);
    if (!isset($_SESSION['winkelmandje'])) {
        header('../bestelling-afgerond');
    }
} else {

    if (isset($_SESSION['user'])) {
        echo "Bestelling plaatsen als " . $_SESSION['user']['firstname']
            . " " . $_SESSION['user']['lastname'] .
            " en bezorgen naar " . $_SESSION['user']['adress'] . "?<br> 
        <br><br>
        
        
        ";
        //<a href=\"&continue=yes\" style=\"background-color:palegreen\">Ja</a>


    } else {
    }
}
