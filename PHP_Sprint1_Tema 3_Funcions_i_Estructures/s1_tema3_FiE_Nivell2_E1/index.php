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
    <hr class="hr">
<?php
$places = array("Roma - Italia", "Tokio - Japón", "Ciudad de México - México", "Múnich - Alemania", "Montreal - Canadá", 
                "Moscú - Unión Soviética", "Los Ángeles - Estados Unidos", "Seúl - Corea del Sur", "Barcelona - España", 
                "Atlanta - Estados Unidos", "Sídney - Australia", "Atenas - Grecia", "Pekín - China", "Londres - Reino Unido", 
                "Río de Janeiro - Brasil");
function getOlympicYearAndPlaces($places){
    $result = "";
    for ($year = 1960, $i=0; $year <= 2016, $i < count($places); $year+=4, $i++) { 
        $result .= "The ".($i+17)."º \"Olympic Games\" happened in ".$year." and it taken place in ".$places[$i].".<br/>\n";
      }
     return $result;
    }
    echo getOlympicYearAndPlaces($places);
?>
</body>
</html>

