<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>s1_tema3_basic_nivell1_Excercici5</title>
</head>
<body>
    <?php
        /*
        Crea dos arrays, un que inclogui 5 integers, i un altre que inclogui 3 integers.

        Afegeix un valor més a l'array que conté 3 integers.
        Mescla els dos arrays i imprimeix la mida de l'array resultant per pantalla.
        Ara imprimeix per pantalla l'array resultant valor a valor.
        */

        $vector1 = array(8,7,9,12,46);
        $vector2 = array(17,28,96);

        $vectorfinal = array_merge($vector1,$vector2);
        sort($vectorfinal);
        var_dump($vectorfinal);
        echo "<br>";
        echo "<br>";
        print_r($vectorfinal);
        echo "<br>";
        echo "<br>";

        echo "Ara imprimeix per pantalla l'array resultant valor a valor: <br/>";
        $countvectorfinal = count($vectorfinal);
        for ($i=0; $i < $countvectorfinal; $i++) { 
            echo $vectorfinal[$i]."<br>";
        }
    ?>
</body>
</html>