<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>s1_tema3_FiE_nivell1_E3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: #55efc4">
    <fieldset style="border: 2px #737495 solid;">
        <legend ><h2>Jugant a l'amagatall</h2></legend>
        <p>Imagina't que volem que compti fins a un nombre diferent de 10. Programa la funció perquè el final del compte estigui parametritzat.</p>
    </fieldset><br/><br/>
    <form action="index.php" method="get">
        <Label for="comptar">Vull comptar fins: </Label> 
        <input type="number" id="comptar" name="final" value="" required placeholder="Ingressa un numero sencer">
        <input style="border: 2px #737495 solid;" type="submit" name="boton" value="Comptar"><br/>
    </form><br/><br/>
    <hr style="border: 2px #737495 solid;"><br/>
      <?php
        $number = 0;
        if(isset($_GET['boton'])){
          $number = $_GET['final'];
        }
        function countToNumber($number) {
          for ($i = 1; $i <= $number; $i ++) {
              echo $i ."\n";
          }
        }
      ?>
    <div class="box">
      <?php 
        countToNumber($number);
      ?>
    </div>
</body>
</html>