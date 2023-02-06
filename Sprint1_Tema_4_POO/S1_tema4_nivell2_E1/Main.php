<title>S1_tema4_nivell1_E2</title>
<h1>Jugant als daus</h1><br/><br/>
<?php
require 'PokerDice.php';

$Dau1 = new PokerDice();
$Dau2 = new PokerDice();
$Dau3 = new PokerDice();
$Dau4 = new PokerDice();
$Dau5 = new PokerDice();


$Dau1->throw();
$Dau2->throw();
$Dau3->throw();
$Dau4->throw();
$Dau5->throw();



echo "Dau 1: " . $Dau1->shapeName() . "<br/>";
echo "Dau 2: " . $Dau2->shapeName() . "<br/>";
echo "Dau 3: " . $Dau3->shapeName() . "<br/>";
echo "Dau 4: " . $Dau4->shapeName() . "<br/>";
echo "Dau 5: " . $Dau5->shapeName();

echo "<br/>";
echo "<br/>";
echo "Total de llançaments: " . PokerDice::getTotalThrows();

?>