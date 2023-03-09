<?php
class Employee {
    private string $nom;
    private float $sou;

    function __construct(string $nom, float $sou){
        $this->nom = $nom;
        $this->sou = $sou;
    }

    public function initialize() {
        return "El empleado ".$this->nom." tiene un sueldo de ".$this->sou."€\n";
    }

    public function print(){
        if ($this->sou < 6000) {
            echo $this->nom." No paga impuestos\n";
        }else{
            echo $this->nom." Si paga impuestos.\n";
        }
    }
}
?>