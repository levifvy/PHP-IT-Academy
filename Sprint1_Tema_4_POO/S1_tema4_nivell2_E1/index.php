
<?php
require 'PokerDice.php';

$Dau1 = new PokerDice();
$Dau2 = new PokerDice();
$Dau3 = new PokerDice();
$Dau4 = new PokerDice();
$Dau5 = new PokerDice();

foreach ([$Dau1, $Dau2, $Dau3, $Dau4, $Dau5] as  $value) {
    $value->throw();
    echo "Dau ".PokerDice::getTotalThrows(). ": " . $value->shapeName() . "\n";
}
echo "Total de llançaments: " . PokerDice::getTotalThrows();

?>
