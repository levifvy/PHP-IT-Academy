<?php
class Rectangle extends Shape{

function calcularArea(){
    return "El area del rectangulo de base $this->ample m y altura $this->alt m  es  ".$this->ample * $this->alt." m";
}
}
?>