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
        Function isBitten(){
            if (rand(0,1) == 1) {
                $resposta = "TRUE";
            }else {
               $resposta = "FALSE";
            }
            return $resposta;
        }
    $value_from_isbitten = isBitten();//Para adornar con el CSS
	$resultats_class = ( $value_from_isbitten == "TRUE") ? "bitten" : "not-bitten";
    $string_class = substr($resultats_class, 0);
	?>
	<form action="index.php" method="get">
		<input class="gameBox" type="submit" name="findnumber" value="PLAY GAME">
	</form>
	<hr>
	<h2>El meu dit serà mossegat per Charlie: ...</h2>
	<div class ="<?php echo $string_class ?>">
		<?php echo $value_from_isbitten; ?>
	</div>
</body>
</html>