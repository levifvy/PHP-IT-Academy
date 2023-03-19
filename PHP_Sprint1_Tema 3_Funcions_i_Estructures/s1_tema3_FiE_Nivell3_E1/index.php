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
        <p>La criba d'Eratòstenes és un algoritme pensat per a trobar nombres primers dins d'un interval donat.<br>Basant-te en la informació de l'enllaç adjunt, implementa la criba d'Eratòstenes dins d'una funció, de tal forma que puguem invocar la funció per a un número concret.</p>
    </fieldset>
    <hr>
    <form autocompleted action="index.php" method="get">
        <label for="cribaEratostenes"><h3>Cercar numeros primers fins al: </h3></label>
        <input type="number" id="cribaEratostenes" name="criba" value="2"  placeholder=" &nbsp&nbsp&nbsp&nbsp Numero sencer" min="2" required>
        <input class="find_prime_numbers" type="submit" name="process" value="Anar">
    </form>
    <?php
    $number = 0;
       if(isset($_GET['process'])){
           $number = (int)($_GET['criba']);
       }
    
        function cribaEratostenes($number) {
            $prime_numbers = array();
            $not_be_primes_numbers = array();
        
            for ($i = 2; $i <= $number; $i++) {
                if (!in_array($i, $not_be_primes_numbers)) {
                    $prime_numbers[] = $i;
                    for ($j = $i * $i; $j <= $number; $j += $i) {
                        $not_be_primes_numbers[] = $j;
                    }
                }
            }
            return $prime_numbers;
        }
   ?>
    <hr>
    <h2>Numeros primers trobats: </h2>
    <div class="result">
        <?php 
            echo implode(", ",cribaEratostenes($number));
        ?>
    </div>
</body>
</html>