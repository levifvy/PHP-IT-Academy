<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>s1_tema3_bàsics_nivell2_Excercici2</title>
</head>
<body>
    <?php

        $cadenaInicial = "maquetacion";
        echo "<strong>La cadena inicial es: </strong>".$cadenaInicial;
        echo "<br/>";
        $cadenaFinal = exchange($cadenaInicial);
        echo "<strong>La cadena intercamviada es: </strong>".$cadenaFinal;

        function exchange($cadena) {
            $caracter1 = $cadena[0];
            $caracterUltimo = $cadena[strlen($cadena) - 1];
            $cadena[0] = $caracterUltimo;
            $cadena[strlen($cadena) - 1] = $caracter1;
            return $cadena;
        }

    ?>
</body>
</html>