<?php
include('Tigger.php');

$tigger = Tigger::getInstance();

$tigger->roar(); 
$tigger->roar(); 
$tigger->roar(); 

echo"<br/>";
echo"<br/>";
echo "Number of roars: " . $tigger->getCounter(); 

?>