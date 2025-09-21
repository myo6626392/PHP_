<?php
abstract class T_abstract{
    protected $brand;
    protected $model;
    protected $color;
    protected $year;

    public function __construct($brand,$model,$color,$year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
        $this->year = $year;

    }

    public function matchine(){
        return "Brand Name: $this->brand, Model Name: $this->model and Color: $this->color and Made Year:$this->year".PHP_EOL;
    }

    abstract public function startEngine();
    abstract public function stop();
    abstract public function run();

}

class Car extends T_abstract{
    private  $doors;

  public function __construct($brand,$model,$color,$year,$doors)
    {
        parent::__construct($brand,$model,$color,$year);
        $this->doors = $doors;

    }
      public function startEngine(){
        return "start".PHP_EOL;
      }
     public function stop(){return "stop".PHP_EOL;}
     public function run(){return "run".PHP_EOL;}

}

$index = new Car("Toyota","Citta","white",1995,4);
//echo $index->startEngine();
//echo $index->stop();
//echo $index->run();
//echo $index->matchine();

class Mortor extends T_abstract{
    private  $doors;

  public function __construct($brand,$model,$color,$year,$doors)
    {
        parent::__construct($brand,$model,$color,$year);
        $this->doors = $doors;

    }
      public function startEngine(){
        return "start".PHP_EOL;
      }
     public function stop(){return "stop".PHP_EOL;}
     public function run(){return "run".PHP_EOL;}

}

$index = new Car("Suzuki","Citta","white",1995,4);


class Ship extends T_abstract{
    private  $doors;

  public function __construct($brand,$model,$color,$year,$doors)
    {
        parent::__construct($brand,$model,$color,$year);
        $this->doors = $doors;

    }
      public function startEngine(){
        return "start".PHP_EOL;
      }
     public function stop(){return "stop".PHP_EOL;}
     public function run(){return "run".PHP_EOL;}

}

$index = new Car("Hiace","Citta","white",1995,4);


class Vehicle{
    static public function runn(){
$cars = [
    new Car("Toyota","Citta","white",1995,4),
    new Car("Suzuki","Citta","white",1995,4),
    new Car("Hiace","Citta","white",1995,4),
];

foreach($cars as $car){
echo $car->matchine();
echo $car->startEngine();
echo $car->stop();
echo $car->run();

}


    }
}
Vehicle::runn();