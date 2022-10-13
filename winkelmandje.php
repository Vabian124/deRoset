<?php
include('./blocks/header.php');
include_once('./classes/product.php');
include_once('./verwerk/database.php');
?>

<div class="main" id="main">
    


</div>
<script>

const MAIN = document.getElementById("main");
let items = JSON.parse(localStorage.getItem("winkelmandje"));
console.log(items);



for (let i = 0; i < items.length; i++) {   
        MAIN.innerHTML += "<h5>" + items[i].id + "</h5>";

        <?php $product = new Product($conn);
        
        $idProducts= $product->getById($id); ?>
        MAIN.innerHTML += "<h6><?php echo $idProducts['name'];  ?></h6>"




        //MAIN.innerHTML += "<button onClick='verwijderitem(" + i + ")'>Verwijder item</button>";
        //MAIN.innerHTML += "<button id='bewerkitemsKnop' onClick='bewerkitem(" + i + ")'>Bewerk item</button>";
        
    }

</script>
