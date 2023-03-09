<?php

class Shape {
    protected float $ample;
    protected float $alt;

function __construct(float $ample, float $alt){
    $this->ample = $ample;
    $this->alt = $alt;
}

function calcularArea(){
    return "El area de la figura es: ";
}
}
?>
