<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S1_Tema3_bàsics_Nivell3_Excercici2</title>
</head>
<body>
    <?php
    /*
    Escriu un programa en PHP que compta el nombre total de vegades que un valor existeix en l'array.
    */

    $array = [11, 74, 3, 74, 7, 6, 7, 4, 94, 1, 2, 75, 8, 3, 76, 35, 41, 2, 74];
    $valor = 74;

    echo "Si tenim el següent l'array: <br/>";
    $total = contar($array, $valor);
    print_r ($array);
    echo "<br/><br/>";
    echo "El valor $valor apareix $total vegades a l'array.";

    function contar($array, $valor) {
        $contador = 0;
        foreach ($array as $elemento) {
            if ($elemento == $valor) {
                $contador++;
            }
        }
        return $contador;
    }
    ?>
</body>
</html>