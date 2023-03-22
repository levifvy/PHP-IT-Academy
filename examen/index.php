<?php 
include'Players.php';
// create players:
$player1 = new Player("Lionel Messi", 34, 35, 10, 100, Position::Defensive_Midfielder);
$player2 = new Player("Cristiano Ronaldo", 36, 15, 12, 45, Position::Center_Forward);
$player3 = new Player("Virgil van Dijk", 30, 3, 5, 12, Position::Halfback_Midfielder);
$player4 = new Player("Kevin De Bruyne", 30, 8, 22, 32, Position::Back_Defender);
$player5 = new Player("N'Golo Kanté", 30, 80, 20, 15, Position::Center_Forward);

//add players to collection:
$players = new Players();
$players->addPlayer($player1);
$players->addPlayer($player2);
$players->addPlayer($player3);
$players->addPlayer($player4);
$players->addPlayer($player5);

echo "<pre>".PHP_EOL;

    // find player with most goals:
    echo $players->getPlayerWithMostGoals().PHP_EOL;

    // find player with most fouls received:
    echo $players->getPlayerWithMostFoulsReceived().PHP_EOL;

    // find player with least fouls committed:
    echo $players->getPlayerWithLeastFoulsCommitted().PHP_EOL;

    // Echo PHP_EOL;
    // echo "Player positions: ".PHP_EOL;
    // echo $players->showPositions().PHP_EOL;

echo "</pre>";
?>