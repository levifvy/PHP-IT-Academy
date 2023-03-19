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
            $xocolata = $_POST['xocolata'];
            $xiclets = $_POST['xiclets'];
            $caramels = $_POST['caramels'];

            if(!isset($_SESSION['total'])) {
                $_SESSION['total'] = 0;
            }
            $_SESSION['total'] += (1 * $xocolata) + (0.5 * $xiclets) + (1.5 * $caramels); 

            if(!isset($_SESSION['xocolata'])) {
                $_SESSION['xocolata'] = 0;
            }
            if(!isset($_SESSION['xiclets'])) {
                $_SESSION['xiclets'] = 0;
            }
            if(!isset($_SESSION['caramels'])) {
                $_SESSION['caramels'] = 0;
            }

            $_SESSION['xocolata'] += $xocolata;
            $_SESSION['xiclets'] += $xiclets;
            $_SESSION['caramels'] += $caramels;
            
        }
        function sumValuesFromProducts(){
            return $_SESSION['xocolata']." xocolates, ".$_SESSION['xiclets']." de xiclets i ".$_SESSION['caramels']." de caramels = ".(1 * $_SESSION['xocolata'])." + ".(0.5 * $_SESSION['xiclets'] )." + ".(1.5 *  $_SESSION['caramels']);
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
           echo "<b>Subtotal: </b>&nbsp".sumValuesFromProducts();
        ?>
    </div>
    <hr class="line">
    <h2>TOTAL:</h2>
    <div class="results">
        <?php 
            echo $_SESSION['total']." €.";
        ?>
    </div>
    <?php endif; ?>
        <form action="index.php" method="post"><br/>
            <input type="hidden" name="reset" value="reset">
            <input class="reset-button" type="submit" value="Buidar el carret">
        </form>
</body>
</html>