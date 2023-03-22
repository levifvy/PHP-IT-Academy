<?php 
include'Player.php';

class Players{
    private $players = [];

    public function addPlayer(Player $player) {
        $this->players[] = $player;
    }
    public function getPlayerWithMostGoals() {
        $maxGoals = 0;
        $maxGoalsPlayer = null;
        for ($i = 0; $i < count($this->players); $i++) {
            if ($this->players[$i]->getGoalsScored() > $maxGoals) {
                $maxGoals = $this->players[$i]->getGoalsScored();
                $maxGoalsPlayer = $this->players[$i]->getName();
            }
        }
        return $maxGoalsPlayer." is the best player, with ".$maxGoals." goals made.";
    }
    public function getPlayerWithMostFoulsReceived() {
        $maxFoulsReceived = 0;
        $maxFoulsReceivedPlayer = null;
        for ($i = 0; $i < count($this->players); $i++) {
            if ($this->players[$i]->getFoulsReceived() > $maxFoulsReceived) {
                $maxFoulsReceived = $this->players[$i]->getFoulsReceived();
                $maxFoulsReceivedPlayer = $this->players[$i]->getName();
            }
        }
        return $maxFoulsReceivedPlayer." is the player more affected with ".$maxFoulsReceived." fouls received.";
    }
    public function getPlayerWithLeastFoulsCommitted() {
        $minFoulsCommitted = PHP_INT_MAX;
        $minFoulsCommittedPlayer = null;
        for ($i = 0; $i < count($this->players); $i++) {
            if ($this->players[$i]->getFoulsCommitted() < $minFoulsCommitted) {
                $minFoulsCommitted = $this->players[$i]->getFoulsCommitted();
                $minFoulsCommittedPlayer = $this->players[$i]->getName();
            }
        }
        return $minFoulsCommittedPlayer.$minFoulsCommitted." fouls, has the fewest fouls made.";
    }
    // public function showPositions() {
    //     foreach ($this->players as $player) {
    //         echo $player->getName() . ": " . $player->getPosition().".".PHP_EOL;
    //     }
    // }
}
?>
