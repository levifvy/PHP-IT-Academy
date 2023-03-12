<?php 
class Features {
    private string $name;
    private int $age;
    private int $goals;
    private int $fouls_made;
    private int $fouls_received;
    private string $position;

    function __construct(string $name, int $age, int $goals, int $fouls_made, int $fouls_received, string $position){
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
}
?>