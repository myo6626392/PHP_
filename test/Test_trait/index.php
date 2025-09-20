<?php
include "./TestCar.php";
include "./TestPlane.php";
include "./TestShip.php";

class Index extends TestCar{
    
        use TestPlane,TestShip;
    
}
$index = new Index();
$index->fly();
$index->drive();
$index->sail();