<?php  
include'Enum.php';
class Player{
    private $name;
    private $age;
    private $goalsScored;
    private $foulsCommitted;
    private $foulsReceived;
    private $position;

    public function __construct($name, $age, $goalsScored, $foulsCommitted, $foulsReceived, $position) {
        $this->name = $name;
        $this->age = $age;
        $this->goalsScored = $goalsScored;
        $this->foulsCommitted = $foulsCommitted;
        $this->foulsReceived = $foulsReceived;
        $this->position = $position;
    }
    public function getName() {
        return $this->name;
    }
    public function getGoalsScored() {
        return $this->goalsScored;
    }
    public function getFoulsCommitted() {
        return $this->foulsCommitted;
    }
    public function getFoulsReceived() {
        return $this->foulsReceived;
    }
    // public function getPosition() {
    //     return $this->position->name;
    // }
}
?>