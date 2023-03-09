<?php
include'Shape.php';
include'Triangle.php';
include'Rectangle.php';         

$rectangulo1 = new Rectangle(24, 15);
$rectangulo2 = new Rectangle(20, 50);
$triangulo1 = new Triangle(32, 45);
$triangulo2 = new Triangle(15, 23);

foreach ([$rectangulo1, $rectangulo2, $triangulo1, $triangulo2] as $Shape) {
    echo $Shape->calcularArea()."\n";
}

?>