<title>S1_tema4_nivell1_E2</title>
<?php
    require 'Shape.php';
    

    $triangle = new Triangle(20,40);
    $rectangle = new Rectangle(15,10);

    echo "<br/>";
    echo "Triangle te un area de: ".$triangle->area();
    echo "<br/>";
    echo "Rectangle te un area de: ".$rectangle->area();
?>