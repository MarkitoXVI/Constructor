<?php

class Bird {
    public $color;
    private $age; 

    // konstruktors
    public function __construct($c, $a) {
        $this->color = $c;
        $this->age = $a;
    }

    //Destruktors
    public function __destruct() {
        echo $this->color . "crashed in the tower " . "<br>"; 
    }
    
    // Metode ir iekšējā funkcija
    public function fly() {
        echo "Fly high " . $this->color . " bird, "; 
    }
}