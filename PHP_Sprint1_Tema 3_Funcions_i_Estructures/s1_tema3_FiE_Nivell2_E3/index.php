<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="box">
    <fieldset>
        <legend>
            <h1>Comprant a la botiga:</h1>
        <p>Preus:<br/>- Xocolata: 1 euro.<br/>- Xiclets: 0,50 euros.<br/>- Caramels: 1,50 euros.<br/></p>
        </legend>
    </fieldset><br/>
    <div class="pre_results" >
        <form action="index.php" method="post">
            <label>Xocolata: <input type="number" name="xocolata" value="0" min="0"></label>
            <label>Xiclets: <input type="number" name="xiclets" value="0" min="0"></label>
            <label>Caramels: <input type="number" name="caramels" value="0" min="0"></label>
            <input class="add-button" type="submit" name="submit" value="Afegir al carret">
        </form><br/>
    </div><br/>
    <?php
        if(isset($_POST['submit'])){
            $_SESSION['xocolata'] += $_POST['xocolata']?? 0;
            $_SESSION['xiclets'] += $_POST['xiclets']?? 0;
            $_SESSION['caramels'] += $_POST['caramels']?? 0;
        }
        function getTotalPrice($chocolate, $gum, $candy){
            $_SESSION['total'] = ((1 * $chocolate) + (0.5 * $gum) + (1.5 * $candy))?? 0;
            return $_SESSION['total'];
        }
        function sumValuesFromProducts($chocolate, $gum, $candy){
            return $chocolate." xocolates, ".$gum." de xiclets i ".$candy." de caramels = ".(1 * $chocolate)." + ".(0.5 * $gum)." + ".(1.5 * $candy);
        }
        
        if(isset($_POST['reset'])){
            session_unset();
            session_destroy();
        }

        if(isset($_SESSION['total'])):

    ?>
    <hr class="line">
    <div class="subtotal">
        <?php 
           echo "<b>Subtotal: </b>&nbsp".sumValuesFromProducts($_SESSION['xocolata'], $_SESSION['xiclets'] += $_POST['xiclets'], $_SESSION['caramels']);
        ?>
    </div>
    <hr class="line">
    <h2>TOTAL:</h2>
    <div class="results">
        <?php 
            echo getTotalPrice($_SESSION['xocolata'], $_SESSION['xiclets'] += $_POST['xiclets'], $_SESSION['caramels'])." €.";
        ?>
    </div>
    <?php endif; ?>
        <form action="index.php" method="post"><br/>
            <input type="hidden" name="reset" value="reset">
            <input class="reset-button" type="submit" value="Buidar el carret">
        </form>
</body>
</html>