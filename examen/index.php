<?php 
include'Players.php';

$players = array(
  new Players("Cavani",23,70,2,67, Position::Defensive_Midfielder),
  new Players("Sotil",25,112,7,18, Position::Defensive_Midfielder),
  new Players("Rivaldo",36,46,5,23, Position::Halfback_Midfielder),
  new Players("Forlan",29,90,3,60, Position::Back_Defender),
  new Players("Drogua",19,33,4,78, Position::Center_Forward),
);

echo "<pre>\n";
$listat_goles_1 = array();
$listat_faltas_realizadas_2 = array();
$listat_faltas_recibidas_3 = array();


foreach($players as $player) {
array_push($listat_goles_1, $player->getGoals());
array_push($listat_faltas_realizadas_2, $player->getFouls_made());
array_push($listat_faltas_recibidas_3, $player->getFouls_received());
}
$max_goals = (max($listat_goles_1));
$min_fouls_made = (min($listat_faltas_realizadas_2));
$max_fouls_received = (max($listat_faltas_recibidas_3));


//1
foreach ($players as $player) {
  if ($player->getGoals() == $max_goals) {
    echo $player->getName()." es el jugador que hizo la maxima cantidad de anotaciones con ".$max_goals." goles.\n";
  }
} 
//2
foreach ($players as $player) {
  if ($player->getFouls_made() == $min_fouls_made) {
    echo $player->getName()." es el jugador que hizo la minima cantidad de faltas con ".$min_fouls_made." faltas realizadas.\n";
  }
}
//3
foreach ($players as $player) {
  if ($player->getFouls_received() == $max_fouls_received) {
    echo $player->getName()." es el jugador que recibio la maxima cantidad de faltas con ".$max_fouls_received." faltas recibidas.\n";
  }
}
//4
foreach ($players as $player) {
  echo "\n".($player->getName())." tiene la posicion de ".($player->getPosition()).".";
}

echo "</pre>";

?>