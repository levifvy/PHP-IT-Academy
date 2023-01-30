<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S1_Tema3_bàsics_Nivell3_Excercici1</title>
</head>
<body>
<?php
    /*
    Escriu un programa en PHP per convertir una cadena en un array (retallant cada caràcter i eliminant les línies buides).

    Entrada
    Hello world

    Sortida
    array(10) { [0]=> string(1) "H" [1]=> string(1) "e" [2]=> string(1) "l" [3]=> string(1) "l" [4]=> string(1) "o" 
                [5]=> string(1) "W" [6]=> string(1) "o" [7]=> string(1) "r" [8]=> string(1) "l" [9]=> string(1) "d"}
    */

    $cadena = "Les coses clares i la xocolata espessa";

    echo "Cadena original: <br/>". $cadena."<br/><br/>";
    $array = cadenaChangeToArray($cadena);
    print_r($array);

    function cadenaChangeToArray($cadena) {
        $cadena = preg_replace('/\s+/', '', $cadena); //eliminar espacios en blanco
        $array = str_split($cadena); //crear array con cada caracter
        $array = array_filter($array, function($val) { //eliminar elementos vacios
            return !empty($val);
        });
        return $array;
    }

?>
</body>
</html>