<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>s1_tema3_bàsics_nivell2_Excercici1</title>
</head>
<body>
    <?php
        /*
        Escriure un programa PHP per calcular la suma dels dos valors enters donats. 
        Si els dos valors són iguals, torna el doble de la seva suma.
        */

        $x = 8;
        $y = 9;
        $x = 9;

        if ($x == $y) {
            $z = 2*($x + $y);
            echo "La suma de $x i $y és: ".$z;
        }
        else {
            $k = $x + $y;
            echo "La suma de $x i $y és: ".$k;
        }
    ?>
</body>
</html>