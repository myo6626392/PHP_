<?php

use Dom\Mysql;

abstract class Vehicle {
    protected $brand;
    protected $model;
    protected $year;
    protected $color;

    public function __construct($brand,$model,$year,$color)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;

    }
    public function getVehicle(){
        return "Brand ". $this->brand . " Model ". $this->model . " Year ". $this->year." Color ". $this->color.PHP_EOL;
    }
    abstract public function startEngine();
    abstract public function stopEngine();
    abstract public function fuelTypeEngine();
}

class Car extends Vehicle{
    private $doors;
    public function __construct($brand,$model,$year,$color,$doors)

    {
        parent::__construct($brand,$model,$year,$color);
        $this->doors = $doors;
        
        
    }
      public function startEngine(){
        return "start".PHP_EOL;

      }
       public function stopEngine(){
        return "stop".PHP_EOL;
       }
     public function fuelTypeEngine(){
        return "Gasoline".PHP_EOL;
     }
     public function getDoors(){
        return $this->doors.PHP_EOL;
     }
    
}

//$toyota = new Car("toyota","Carmy",2020,"white",4);
//echo $toyota->getVehicle();
//echo $toyota->fuelTypeEngine();
//echo $toyota->stopEngine();
//echo $toyota->startEngine();

//abstract blueprint
//protected encupsulation

class MortorCycle extends Vehicle{
    private $wheels;
    public function __construct($brand,$model,$year,$color,$wheels)

    {
        parent::__construct($brand,$model,$year,$color);
        $this->wheels = $wheels;
        
        
    }
      public function startEngine(){
        return "start".PHP_EOL;

      }
       public function stopEngine(){
        return "stop".PHP_EOL;
       }
     public function fuelTypeEngine(){
        return "Gasoline".PHP_EOL;
     }
     public function getWheels(){
        return $this->wheels.PHP_EOL;
     }
    
}
class ship extends Vehicle{
    private $boards;
    public function __construct($brand,$model,$year,$color,$boards)
    {
        parent::__construct($brand,$model,$year,$color);
        $this->boards = $boards;
    }
    public function startEngine(){
        return "start".PHP_EOL;

      }
       public function stopEngine(){
        return "stop".PHP_EOL;
       }
     public function fuelTypeEngine(){
        return "Gasoline".PHP_EOL;
     }
     public function getBoards(){
        $this->boards.PHP_EOL;
     }
}

//polimopisan need to check spelling
class VechicleDemo{
    public static function run(){
        $toyota = new Car("toyota","Carmy",2020,"white",4);
        $honda = new MortorCycle("honda","CBR",2019,"red",3);
        $ship = new ship("titanit","cargo",2019,"white",5);
        echo $toyota->getVehicle();
        echo $toyota->fuelTypeEngine();
        echo $toyota->stopEngine();
        echo $toyota->startEngine();
        echo $honda->getVehicle();
        echo $honda->fuelTypeEngine();
        echo $honda->stopEngine();
        echo $honda->startEngine();
        echo $honda->getWheels();
        echo $ship->getVehicle();
        echo $ship->fuelTypeEngine();
        echo $ship->stopEngine();
        echo $ship->startEngine();
        echo $ship->getBoards();

    }
    

}
VechicleDemo::run();