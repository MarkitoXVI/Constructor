<?php

class Car{
    public $brand;
    private $mileage;

    public function __construct($b, $m) {
        $this->brand = $b;
        $this->mileage = $m;


        // echo $this->brand = $brand. " is alive <br>";
    }
    
    public function increaseMileage($x)
    {
        $this->mileage += $x;
    }


    public function __dectruct()
    {
        echo $this->brand. " is dead after ". $this->mileage ."<br>";
    }
}

?>