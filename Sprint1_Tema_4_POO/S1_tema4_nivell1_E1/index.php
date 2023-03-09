<?php
include'Employee.php';

$empleado1 = new Employee("Juan", 7000);
$empleado2 = new Employee("Esther", 5000);
$empleado3 = new Employee("Renato", 8000);

foreach ([$empleado1, $empleado2, $empleado3] as $Employee) {
    echo $Employee->initialize()."\n";
}
echo "\n";

foreach ([$empleado1, $empleado2, $empleado3] as $Employee) {
    echo $Employee->print()."\n";
}
?>