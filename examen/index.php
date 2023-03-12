<?php 
include'Features.php';

$players = array(
  new Features("Cavani",23,70,2,67, Position::D),
  new Features("Sotil",25,112,7,18, Position::D),
  new Features("Rivaldo",36,46,5,23, Position::C),
  new Features("Forlan",29,90,3,60, Position::DB),
  new Features("Drogua",19,33,4,78, Position::DC),
);

echo "<pre>\n";
$listat1 = array();
$listat2 = array();
$listat3 = array();

foreach($players as $Features) {
array_push($listat1,$Features->getGoals());
array_push($listat2,$Features->getFouls_made());
array_push($listat3,$Features->getFouls_received());
}
$max_goals = (max($listat1));
$min_fouls_made = (min($listat2));
$max_fouls_received = (max($listat3));

//1
foreach ($players as $Features) {
  if ($Features->getGoals() == $max_goals) {
    echo $Features->getName()." es el jugador que hizo la maxima cantidad de anotaciones con ".$max_goals." goles.\n";
  }
} 
//2
foreach ($players as $Features) {
  if ($Features->getFouls_made() == $min_fouls_made) {
    echo $Features->getName()." es el jugador que hizo la minima cantidad de faltas con ".$min_fouls_made." faltas realizadas.\n";
  }
}
//3
foreach ($players as $Features) {
  if ($Features->getFouls_received() == $max_fouls_received) {
    echo $Features->getName()." es el jugador que recibio la maxima cantidad de faltas con ".$max_fouls_received." faltas recibidas.\n";
  }
}

echo "</pre>";

?>