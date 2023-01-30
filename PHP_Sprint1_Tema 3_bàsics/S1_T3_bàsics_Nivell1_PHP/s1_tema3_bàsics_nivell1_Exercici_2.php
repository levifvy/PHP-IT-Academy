<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>s1_tema3_basic_nivell1_Exercici_2</title>
</head>
<body>
<?php
/*
Imprimeix per pantalla "Hello, World!" utilitzant una variable. Després:
Converteix tots els caràcters de l'string a majúscules i imprimeix en pantalla.
Imprimeix per pantalla la mida (longitud) de la variable.
Imprimeix per pantalla l'string en ordre invers de caràcters.
Crea una nova variable amb el contingut "Aquest és el curs de PHP" i imprimeix per pantalla la concatenació de tots dos strings.
*/
"<br/>";
echo "Imprimeix per pantalla, Hello, World!, utilitzant una variable: <br/>";
$string = "Hello, World!";

echo $string."<br/><br/>";

echo "Converteix tots els caràcters de l'string a majúscules: <br/>";
echo strtoupper($string)."<br/><br/>";

echo "Imprimeix per pantalla la mida (longitud) de la variable: <br/>";
echo strlen($string)."<br/><br/>";

echo "Imprimeix per pantalla l'string en ordre invers de caràcters: <br/>";
echo strrev($string)."<br/><br/>";

$newString = "Aquest és el curs de PHP";

echo "Crea una nova variable amb el contingut, Aquest és el curs de PHP i imprimeix per pantalla la concatenació de tots dos strings: <br/>";
echo $string ." ". $newString;

?>
</body>
</html>