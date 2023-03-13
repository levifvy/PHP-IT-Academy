<?php 
enum Position {
    case Defensive_Midfielder;
    case Back_Defender;
    case Halfback_Midfielder;
    case Center_Forward;
} 
Position::cases();
class Players {
    private string $name;
    private int $age;
    private int $goals;
    private int $fouls_made;
    private int $fouls_received;
    private Position $position;

    function __construct(string $name, int $age, int $goals, int $fouls_made, int $fouls_received, Position $position){
        $this->name=$name;
        $this->age=$age;
        $this->goals=$goals;
        $this->fouls_made=$fouls_made;  
        $this->fouls_received=$fouls_received;
        $this->position=$position;
    }
    public function getName()
    {
        return $this->name;
    }

    public function getGoals()
    {
        return $this->goals;
    }

    public function getFouls_made()
    {
        return $this->fouls_made;
    }

    public function getFouls_received()
    {
        return $this->fouls_received;
    }

    public function getPosition()
    {
        return $this->position::cases();
    }
}
?>