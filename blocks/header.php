<style>
.column {
  float: left;
  width: 10%;
  outline: auto;
  margin-bottom: 1%;
}
.column a{
    font-size: large;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
<?php
include_once('./verwerk/session.php');
include_once('./verwerk/database.php');
include_once('../class/user.php');
?>
</style>
<div class="row">
  <div class="column"><a href="./register.php">Register</a></div>
  <div class="column"><a href="./login.php">Login</a></div>
  <div class="column"><a href="./index.php">Index</a></div>
  <div class="column"><a href="./item-overzicht">Itemoverzicht</a></div>
  <div class="column"><a href="./session.php">Sessionviewer</a></div>
  <div class="column"><a href="./gebruiker-bewerk.php">Gebruiker Bewerk</a></div>
  <div class="column"><a href="./gebruiker-verwijder.php">Gebruiker verwijder</a></div>
  
</div>