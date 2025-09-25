<?php
include "autoload.php";

class Eat implements FootInterface,GradeInterface{
    public function eating(){
        echo "he is eating".PHP_EOL;
    }
     public function greeting(){
        echo "he is greeting".PHP_EOL;
    }
    public function getLevel($value)
    {
        return "I'm level $value".PHP_EOL;
    }
};
$n = new Eat();
$n->eating();
$n->greeting();
echo $n->getLevel(3);