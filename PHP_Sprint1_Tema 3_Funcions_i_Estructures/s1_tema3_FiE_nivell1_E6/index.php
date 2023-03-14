<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>s1_tema_FiE_nivell1_E6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="container">
    <fieldset>
        <legend>
            <h2>Charlie em va mossegar el dit!</h2>
        </legend>
        <p>- Charlie et mossegarà el dit exactament el 50% del temps.</p>
    </fieldset>
    <hr>
    <?php
        $numRandom = rand(0,1);
        Function isBitten($numRandom){
            if ($numRandom == 1) {
                $resposta = "True";
            }else {
               $resposta = "False";
            }
            echo $resposta;
        }
    ?>
    <form action="index.php" method="get">
        <input class="gameBox" type="submit" name="findnumber" value="Jugar" >
    </form>
    <hr>
    <form name="numeros" method="get" action="index.php">
        <h3>El meu dit serà mossegat per Charlie: ...</h3>
        <input class ="resultats" type="text" value="<?php isBitten($numRandom) ?>">
    </form>

</body>
</html>