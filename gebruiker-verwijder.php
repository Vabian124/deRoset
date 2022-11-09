<?php include('./blocks/header.php'); 
$rootDir = realpath($_SERVER["DOCUMENT_ROOT"]);
require "$rootDir\deRoset\\verwerk\session.php";?>
<button>
    <a href="./verwerk/gebruiker-verwijder.php<?php 
    if(isset($_GET['id']))
    {
        echo "?id=" . $_GET['id'];
    }
    ?>">Verwijder Account</a>
</button>