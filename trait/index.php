<?php
include "Car.php";
include "Aeroplane.php";
include "Ship.php";

class Index extends Car {
    use Aeroplane,Ship;
}

$all = new Index;
$all->car();
$all->ship();
$all->fly();