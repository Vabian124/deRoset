<style>

.container {  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-template-rows: 0.6fr 1.9fr 0.5fr;
  grid-auto-columns: 1fr;
  grid-auto-rows: 1fr;
  gap: 5px 5px;
  grid-auto-flow: row;
  grid-template-areas:
    "winkelmandje winkelmandje logo"
    "content content content"
    "footer footer footer";
}

.logo {  display: grid;
  grid-template-columns: 0.4fr 2.1fr 0.5fr;
  grid-template-rows: 0.4fr 1.2fr 1.4fr;
  gap: 10px 0px;
  grid-auto-flow: row;
  grid-template-areas:
    ". . ."
    ". logoImg ."
    ". logoText .";
  grid-area: logo;
}

.logoImg { grid-area: logoImg;

}

.logoImg >img { grid-area: logoImg; 
 width: 100%;
}



.logoText { grid-area: logoText;

 }

.footer { grid-area: footer; }

.content {  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-template-rows: 1fr 1fr 1fr;
  gap: 0px 0px;
  grid-auto-flow: row;
  grid-template-areas:
    ". . ."
    ". . ."
    ". . .";
  grid-area: content;
}

.winkelmandje { grid-area: winkelmandje; }


html, body , .container {
  height: 100%;
  margin: 0;
}

/* For presentation only, no need to copy the code below */

.container * {
  border: 1px solid red;
  position: relative;
}

.container *:after {
  content:attr(class);
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: grid;
  align-items: center;
  justify-content: center;
}




</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="winkelmandje">
    

<textarea class="scrollabletextbox" name="note"><?php echo $_SESSION['winkelmandje']; ?></textarea>

</div>
<div class="container">
  <div class="logo">
    <div class="logoImg"><img src="./logo.png" alt="" srcset=""></div>
    <div class="logoText"><b>De Roset</b></div>
  </div>
  <div class="content"></div>
  <div class="footer"></div>
</div>
</body>
</html>
