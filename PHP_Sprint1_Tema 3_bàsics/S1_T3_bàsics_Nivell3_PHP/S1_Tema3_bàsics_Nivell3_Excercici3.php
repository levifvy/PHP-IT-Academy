<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S1_Tema3_bàsics_Nivell3_Excercici3</title>
</head>
<body>
    <?php
        /*
        $ X = array (10, 20, 30, 40, 50);

        Elimina un element de l’array anterior. Després d'eliminar l'element, les claus senceres han de ser normalitzades.

        Per example: Eliminant el número 40
        Sortida
        array(5) { [0]=> int(10) [1]=> int(20) [2]=> int(30) [3]=> int(40) [4]=> int(50) }
        array(4) { [0]=> int(10) [1]=> int(20) [2]=> int(30) [3]=> int(50) }
        */

        $vector = array(10, 20, 30, 40, 50);

        $valorEliminar = 20;

        echo "Array original: <br/>";
        print_r($vector);

        echo "<br/><br/>";

        $clave = array_search($valorEliminar, $vector);
        unset($vector[$clave]);
        $vector = array_values($vector);

        echo "<br/>";

        echo "Array després d'eliminar $valorEliminar i normalitzar les claus: <br/>"; 
        print_r($vector);

    ?>
</body>
</html>