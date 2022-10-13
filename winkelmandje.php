<?php
include('./blocks/header.php');
include_once('./classes/product.php');
include_once('./verwerk/database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_SESSION['winkelmandje'])){
    echo "<br><br>";
    foreach($_SESSION['winkelmandje'] as $item)
    {
        echo "<br><br>";
        var_dump($item);
        if($item['is_flavor_of_week']=="0"){$is_fow = "No";}else{$is_fow = "Yes";}

        echo '<p ">"'.$item['name']." - ".$item['price_per_kg']."/kg - ".$is_fow." - ".$item['category'].'</a><br><a style="background-color:red;" href="./verwerk/leegwinkelmandje.php?id='.$item['id'].'">Verwijder</a><br>';

        echo "
        <br>
        <a href=\"./verwerk/leegwinkelmandje.php\">Leeg winkelmandje</a>
        
        
        ";
    }
    }
    else//als winkelmand leeg is
    {
        echo "Winkelmandje is leeg";
    }


?>

    
</body>
</html>
<script>

let items = JSON.parse(localStorage.getItem("winkelmandje"));



for (let i = 0; i < items.length; i++) {   
        MAIN.innerHTML += "<h5>" + items[i].id + "</h5>";

        <?php $product = new Product($conn);
        
        $idProducts= $product->getById($id); ?>
        MAIN.innerHTML += "<h6><?php echo $idProducts['name'];  ?></h6>"




        //MAIN.innerHTML += "<button onClick='verwijderitem(" + i + ")'>Verwijder item</button>";
        //MAIN.innerHTML += "<button id='bewerkitemsKnop' onClick='bewerkitem(" + i + ")'>Bewerk item</button>";
        
    }

</script>
