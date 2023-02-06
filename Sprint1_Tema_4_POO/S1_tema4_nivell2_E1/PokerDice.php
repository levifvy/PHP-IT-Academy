<?php

class PokerDice{
    private $cares = array("As", "K", "Q", "J", "7", "8");
    private $ultimLlancament;
    private static $obtenirTotalLlancaments = 0;

    public function throw() {
        $this->ultimLlancament = $this->cares[array_rand($this->cares)];
        self::$obtenirTotalLlancaments++;
    }

    public function shapeName() {
        return $this->ultimLlancament;
    }

    public static function getTotalThrows() {
        return self::$obtenirTotalLlancaments;
    }

}

?>