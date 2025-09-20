<?php
include "./Person.php";
class Book{
    private $name;
    private $price;
    public function author(array $name){
        foreach($name as $key => $n){
            $key = ++$key;
            echo "$key author name is $n <br>";
        }
    }
    public function getPrice(int $price){
        return $this->price = $price;
    }
    //depencenties
    public function getName(Person $person){
     return $this->name = $person->name();
    }
    public function getDev(bool $job){
        return $job? "I'm a developer" : "I'm not a developer";
    }
    public function getDiscount(float $discount){
        return $this->price - $discount;
    }
}
$book = new Book;
//echo $book->getPrice(345);
//echo $book->getPrice("500Ks");//error
//echo $book->getPrice(300);
$array = $book->getName(new Person);
//print_r($array);
//$author = $book->author(["bobo","ayeaye","mgmg"]);
//print_r($author);
$author = $book->author("bobo","ayeaye");
print_r($author);