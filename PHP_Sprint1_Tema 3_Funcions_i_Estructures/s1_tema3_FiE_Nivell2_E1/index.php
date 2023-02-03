<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>s1_tema3_FiE_Nivell2_E1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="box_container">
    <fieldset>
        <legend>
            <h2>Jocs olímpics des de 1960 inclòs fins al 2016</h2>
        </legend>
        <p>Ens han demanat un llistat de cada any on es van produir jocs olímpics des de 1960 inclòs fins al 2016.<br/>Programa un bucle que calculi i mostri per pantalla els anys olímpics dins de l'interval esmentat.</p>
    </fieldset>
    <hr>
<?php

$orden=16;

for ($any= 1960; $any <= 2016; $any+=4) { 
 
    echo ($orden +=1)."º any olimpic → ".$any."<br/>";

  }

?>
</body>
</html>

