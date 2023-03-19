<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>s1_tema3_FiE_Nivell2_E2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="box">
    <fieldset>
        <legend>
            <h2>Quant costa la teva trucada</h2>
        </legend>
        <p>Escriu una funció que determini la quantitat total a pagar per una trucada telefònica segons les següents premisses:<br><br>- Tota trucada que duri menys de 3 minuts té un cost de 10 cèntims.<br>- Cada minut addicional a partir dels 3 primers és un pas de comptador i costa 5 cèntims.</p>
    </fieldset><br/>
    <form name="trucada" action="index.php" method="get">
        <label for="giveMetime" name="giveMetime"><h2>Minuts de trucada: </h2> </label>
        <input type="number" name="giveMeValue" value="" placeholder="Ingressa un numero sencer" required min="0">
        <input type="submit" name="findTime" value="Calcular">
    </form>
    
    <?php
        $time = 0;
        if(isset($_GET['findTime'])){
                $time = $_GET['giveMeValue'];
        }
        
        function callPrice($time){
            $resposta = 0;
            if($time == 0) {
                $resposta = 0;
            }elseif($time > 0 && $time <=3) {
                $resposta = 10;
            }elseif($time > 3) {
                $resposta = 10 + (($time - 3) * 5);
            }
        return $resposta;

        }
        $price_in_euros =callPrice($time)/100;
    
    ?>
    <hr class="line">

    <h2>Resposta: </h2>
    <div class="result">
    <?php  echo $price_in_euros." €."; ?>
    </div> 
</body>
</html>