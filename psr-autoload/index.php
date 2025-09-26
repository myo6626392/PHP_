<?php

use App2\Bike\Bike;
use App2\Ship\Ship;
use App\Car\Car;
use App\Car\Dog;

include "./vendor/autoload.php";

//new Dog();
class Index{
    public function __construct()
    {
       //$bike = new Bike();
        //$bike->Bike();
        //new Ship();
        new Car();
        $car = new Car();
       echo $car->getName();
       new Dog();
       $dog = new Dog();
       $dog->getName();
        
        
    }
}

new Index;