<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>s1_tema3_FiE_nivell1_E4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: #d1ccc0">
    <fieldset style="border: 2px #737495 solid;">
        <legend ><h2>Jugant a l'amagatall</h2></legend>
        <p>Per prevenir oblits en utilitzar la nostra meravellosa opció "amagatall" establirem un paràmetre per 
          defecte igual a 10 a la funció que s'encarrega de fer aquest compte.</p>
    </fieldset><br/><br/>
    <form action="index.php" method="get">
        <Label for="comptar" >Vull comptar fins: </Label> 
        <input type="number" id="comptar" name="final" value="" placeholder="Ingressa un numero sencer" required>
        <input style="border: 2px #737495 solid;" type="submit" name="boton" value="Comptar"><br/>
    </form><br/><br/>
    <hr style="border: 2px #737495 solid;">
    <?php
    if(isset($_GET['boton'])){
    $number = $_GET['final'];
    }
    function countTwoAndTwo($number) {
      for ($i = 2; $i <= $number; $i+=2){
        echo $i . "   ";
        }
    }
    function countTwoAndTwoGame($number){
      echo "1  ";
      if ($number % 2 == 0) {
        echo countTwoAndTwo($number);    
      }elseif ($number % 2 != 0) {
        echo countTwoAndTwo($number)." ".$number;
      }
    }
    ?>
    <h2>Resposta: </h2>
    <div class="box">
      <?php echo countTwoAndTwoGame($number); ?>
      </div>
</body>
</html>