<?php
include_once('./classes/product.php');
include_once('./verwerk/database.php');
$databaseConnection = new Database();
$conn = $databaseConnection->getConnection();

$id = $_GET['id'];
$product = new Product($conn);
$idProducts= $product->getById($id);
var_dump($idProducts);
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
    <div class="wrapper">
        <div class="side"> 
            <div class="grid">
                    <div class="form">
                    <form action="verwerk/item-bewerk.php?id=<?php echo $id ?>" method="post">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value='<?php echo $idProducts['name']?>'>
    </div>
    <div class="form-group">
        <label for="price_per_kg">price_per_kg</label>
        <input type="text" name="price_per_kg" id="price_per_kg" value='<?php echo $idProducts['price_per_kg']?>'>
    </div>
    <div class="form-group">
        <label for="is_flavor_of_week">Flavor of the week</label>
        <input type="radio" id="is_flavor_of_week" name="is_flavor_of_week" value="1" <?php if($idProducts['is_flavor_of_week']=="1"){echo "checked=\"checked\"";}?>>
        <label for="is_flavor_of_week">Yes</label>
        <input type="radio" id="is_flavor_of_week" name="is_flavor_of_week" value="0" <?php if($idProducts['is_flavor_of_week']=="0"){echo "checked=\"checked\"";}?>>
        <label for="is_flavor_of_week">No</label>
    </div>
    <div class="form-group">
        <label for="category">category</label>
        <input type="text" name="category" id="category" value='<?php echo $idProducts['category']?>'>
    </div>
  

    <div class="form-group">
        <button type="submit" class="btn btn-primary" name="submit">Bewerk product</button>

    </div>

</form>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>