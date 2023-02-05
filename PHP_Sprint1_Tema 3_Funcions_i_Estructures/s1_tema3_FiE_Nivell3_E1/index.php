<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>s1_tema3_FiE_Nivell3_E1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="boxContainer">
    <fieldset>
        <legend>
            <h2>La criba d'Eratòstenes</h2>
        </legend>
        <p>La criba d'Eratòstenes és un algoritme pensat per a trobar nombres primers dins d'un interval donat. Basant-te en la informació de l'enllaç adjunt, implementa la criba d'Eratòstenes dins d'una funció, de tal forma que puguem invocar la funció per a un número concret.</p>
    </fieldset>
    <hr>
    <form autocompleted action="index.php" method="get">
        <label for="cribaEratostenes">Ingressar un numero: </label>
        <input type="number" id="cribaEratostenes" name="criba" value=""  placeholder=" &nbsp&nbsp&nbsp&nbsp Numero sencer" required>&nbsp&nbsp
        <input type="submit" name="process" value="Cercar numeros primers">
    </form>
    <?php

        if(isset($_GET['process'])){
            $cercarPrimersFins = (int)($_GET['criba']);
        }

        function cribaEratostenes($number) {
            $numeros = array();
            for ($i = 2; $i <= $number; $i++) {
                $numeros[$i] = true;
            }

            for ($i = 2; $i < $number; $i++) {
                if ($numeros[$i]) {
                    for ($j = 2; $i * $j <= $number; $j ++) {
                        $numeros[$i * $j] = false;
                    }
                }
            }

            $primos = array();
            for ($i = 2; $i <= $number; $i++) {
                if ($numeros[$i] == true) {
                $primos[] = $i;
                }
            }

            return $primos;
        }
        
        $numbers = cribaEratostenes($cercarPrimersFins);
        echo "<br/>";
        echo "Hi ha ".count($numbers)." respostes.";
        echo "<br/>";
        echo "Els nombres primers fins a ".$cercarPrimersFins." son: ";
        echo "<br/>";
        echo "<br/>";
        echo implode(", ", $numbers);
        ?>
       
</body>
</html>