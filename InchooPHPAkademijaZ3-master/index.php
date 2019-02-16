<?php
error_reporting(E_ALL);
isset($_POST["red"])? $red=$_POST["red"] : $red=5;
isset($_POST["stupac"])? $stupac=$_POST["stupac"] : $stupac=5;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Ciklična matrica</title>
</head>
<body>
<!-- Main div -->
<div class = "wraper">
<!-- Top div -->
      <div class = "top">
        <?php for($i=0;$i<3;$i++): ?>
          <span class="dot"></span>
        <?php endfor;?>
      </div>
  <div class="bottom"> 
    <!-- left div -->    
    <div class="left">
        <p class ="input"><b>INPUT</b></p>
      </div>
    <!-- middle div -->
      <div class="middle">
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
            <p>Broj redaka</p>
            <input type="text" name = "red">
            <br>
            <p>Broj stupaca</p>
            <input type="text" name = "stupac">
            <br><br>
            <input type="submit" name ="brojevi" value = "KREIRAJ TABLICU">
        </form>
      </div>
    <!-- third div -->
    <div class="third">
        <p class ="input"><b>OUTPUT</b></p>
    </div>
    <!-- last div div -->
    <div class="last">
      <?php include_once "funkcija.php" ?>
    </div>
    </div>
</div>
 
</body>
</html>

