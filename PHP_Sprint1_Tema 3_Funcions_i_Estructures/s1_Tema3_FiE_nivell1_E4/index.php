<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>s1_tema3_FiE_nivell1_E4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class ="box_main" >
    <fieldset class ="second_box">
        <legend ><h2>Jugant a l'amagatall</h2></legend>
        <p>Per prevenir oblits en utilitzar la nostra meravellosa opció "amagatall" establirem un paràmetre per defecte igual a 10 a la funció que s'encarrega de fer aquest compte.</p>
    </fieldset><br/><br/>
    <form action="index.php" method="post">
        <Label for="comptar" >Vull comptar fins: </Label> 
        <input type="number" id="comptar" name="get_value" value="" placeholder="Ingressa un numero sencer" min="0">
        <input style="border: 2px #737495 solid;" type="submit" name="input_submit" value="Comptar"><br/>
    </form><br/><br/>
    <hr class ="line">
    <?php
    if(isset($_POST['input_submit'])){
    $default_parameter = $_POST['get_value'];
    }
    function countGameAndDefaultParameter($default_parameter = 10){
      $storage = "";
      for ($i = 1; $i <= $default_parameter; $i ++) {
        $storage .= $i."\n";
      }
      return $storage;
    }
    ?>
    <h2>Resposta: </h2>
    <div class="box">
      <?php 
      echo (empty($default_parameter) )? countGameAndDefaultParameter(): countGameAndDefaultParameter($default_parameter);
      ?>
    </div>
</body>
</html>
