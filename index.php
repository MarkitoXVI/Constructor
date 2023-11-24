<?php
include("Car.php");
include("Cat.php");
include("Bird.php");

$mycar1 = new Car("Miata", 0);
$mycar2 = new Car("BMW", 10);

$mycar1->increaseMileage(240);




// // Uztaisīt objektu
// $myBird = new Bird ("Black ", 541);
// echo $myBird->color ."<br>";
// $myBird->fly();

// $myBird2 = new Bird("Plum ", 0.5);
// $myBird2->fly();
// $myCar = new Car ("Dacia");
// $myCar2 = new Car ("Apple car");
// Car::makeNoise();
// echo $myCar->brand;



