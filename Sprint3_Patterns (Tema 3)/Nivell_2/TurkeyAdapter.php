<?php
class TurkeyAdapter extends Duck {
    private $turkey;
    
       public function __construct($turkey) {
              $this->turkey = $turkey;
       }
    
       public function quack() {
              $this->turkey->gobble();
       }
    
       public function fly() {
              for ($i = 0; $i < 5; $i++) {
                     $this->turkey->fly();
              }
       }
    }
?>