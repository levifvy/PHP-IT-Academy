<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>s1_tema3_basic_nivell1_Excercici4</title>
</head>
<body>
    <?php
        /*
        Declara dues variables X i Y de tipus int, dues variables N i M de tipus double i assigna a cadascuna un valor. A continuació, mostra per pantalla per a X i Y:

        El valor de cada variable.
        La suma.
        La resta.
        El producte.
        El mòdul.
        Per N i M realitzaràs el mateix.

        Per a totes les variables (X, Y, N, M)

        El doble de cada variable.
        La suma de totes les variables.
        El producte de totes les variables.
        */

        $X = 8;
        $Y = 3;

        $N = 2.71;
        $M = 1.61;

        echo "El valor de la variable X es: $X.<br/>";
        echo "El valor de la variable Y es: $Y.<br/>";
        echo "El valor de la variable N es: $N.<br/>";
        echo "El valor de la variable M es: $M.<br/>";

        echo "<br/>La suma de $X i $Y és: ".($X+$Y)."<br/>";
        echo "La resta de $X i $Y és: ".($X-$Y)."<br/>";
        echo "El producte de $X i $Y és: ".($X*$Y)."<br/>";
        echo "El mòdul de $X i $Y és: ".($X%$Y)."<br/>";

        echo "<br/>La suma de $N i $M és: ".($N+$M)."<br/>";
        echo "La resta de $N i $M és: ".($N-$M)."<br/>";
        echo "El producte de $N i $M és: ".($N*$M)."<br/>";
        echo "El mòdul de $N i $M és: ".($N%$M)."<br/>";

        echo "<br/>El doble de $X és: ".(2*$X)."<br/>";
        echo "El doble de $Y és: ".(2*$Y)."<br/>";
        echo "El doble de $N és: ".(2*$N)."<br/>";
        echo "El doble de $M és: ".(2*$M)."<br/>";

        echo "<br/>La suma de les variables $X, $Y, $N i $M és: ".($X + $Y + $N + $M)."<br/>";

        echo "<br/>El producte de les variables $X, $Y, $N i $M és: ".($X * $Y * $N * $M)."<br/>";
    ?>
</body>
</html>