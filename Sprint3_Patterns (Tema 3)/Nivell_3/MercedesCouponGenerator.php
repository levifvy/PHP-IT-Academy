<?php

// Define la clase MercedesCouponGenerator
class mercedesCouponGenerator implements carCouponGenerator {
    private $discount = 0;
    private $isHighSeason = false;
    private $bigStock = true;
 
    public function addSeasonDiscount() {
        if ($this->isHighSeason) {
            $this->discount += 2;
        }
    }
 
    public function addStockDiscount() {
        if ($this->bigStock) {
            $this->discount += 7;
        }
    }
 
    public function generateCoupon() {
        $this->addSeasonDiscount();
        $this->addStockDiscount();
        return "Get {".$this->discount."}% off the price of your new Mercedes.";
    }
 }
?>