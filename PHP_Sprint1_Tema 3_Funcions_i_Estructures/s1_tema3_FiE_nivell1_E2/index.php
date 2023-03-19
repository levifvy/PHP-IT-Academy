<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>s1_tema3_FiE_nivell1_E2</title>
</head>
<body style="background-color: #B7E58D">
<?php
  /*
    Per jugar a l'"amagatall" se'ns ha demanat un programa que compti fins a 10. 
    Però la persona que comptarà és una mica tramposa i ho farà comptant de dos en dos. 
    Crea una funció que compti fins a 10, de 2 en 2, mostrant cada número del compte per pantalla.
    */  
function twoAndTwoToTen() {
    for ($i = 0; $i <= 10; $i += 2) {
        echo $i . "\n";
    }
}
echo twoAndTwoToTen();
?>
</body>
</html>