<?php
include "./Car.php";
include "./Plane.php";
include "./Ship.php";

class Index extends Car{
    use Plane,Ship;
    
}
$run = new Index();
$run->fly();
$run->drive();
$run->sail();