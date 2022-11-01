<?php


?>
<style>
.column {
    float: left;
    width: 10%;
    outline: auto;
    margin-bottom: 1%;
}

.column a {
    font-size: large;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
</style>

<div class="row">
    <div class="column"><a href="./register.php">Register</a></div>
    <div class="column"><a href="./login.php">Login</a></div>
    <div class="column"><a href="./index.php">Index</a></div>
    <div class="column"><a href="./item-overzicht.php">Itemoverzicht</a></div>
    <div class="column"><a href="./gebruiker-overzicht.php">Gebruikeroverzicht</a></div>
    <div class="column"><a href="./session.php">Sessionviewer</a></div>
    <div class="column"><a href="./gebruiker-bewerk.php">Gebruiker Bewerk</a></div>
    <div class="column"><a href="./gebruiker-verwijder.php">Gebruiker verwijder</a></div>
    <div class="column"><a href="./bestellen.php">Bestellen</a></div>
    <div class="column"><a href="./winkelmandje.php">winkelmandje</a></div>

</div>