<?php
class A{
    public $age = 39;
    const PORT = 3800;
    public static $name = "rose \n";
    static public function hello(){
        return "hello \n";
    }
    
    
}
$a = new A;
echo $a->age;
//echo A::$age;//error
echo A::$name;
echo A::hello();
echo A::PORT;