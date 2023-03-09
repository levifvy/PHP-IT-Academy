<?php
class Triangle extends Shape{

function calcularArea(){
    return "El area del triangulo de base $this->ample m y altura $this->alt m es  ".$this->ample * $this->alt * 0.5." m";
}
}
?>