<?php
class Employee {
    private $name;
    private $salary;
    
    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }
    
    public function printInfo() {
        if ($this->salary > 6000) {
            echo "$this->name ha de pagar impostos.";
        } else {
            echo "$this->name no ha de pagar impostos.";
        }
    }
}

?>