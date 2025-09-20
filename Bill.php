<?php
//method changing

class Bill{
    public $dinner = 2000000;
    public $lunch = 14000000;
    public $coldDrink = 5000;
    public $chickenFry = 3800;
    public $desserts = 30000;
    public $bill;
    public function dinner($person)
    {
        $this->bill += $this->dinner * $person;
       // print_r($this);
        return $this;
    }
    public function lunch($person){
        $this->bill += $this->lunch *$person;
        return $this;
    }
    public function coldDrink($person){
        $this->bill += $this->coldDrink * $person;
        return $this;

    }
    public function chickenFry($person){
        $this->bill += $this->chickenFry * $person;
        return $this;

    }
    public function desserts($person){
        $this->bill += $this->desserts * $person;
        return $this;

    }

}
$table1 = new Bill;
echo "table1 =>",$table1->lunch(5)->coldDrink(3)->chickenFry(5)->bill."\n";

$table2 = new Bill();
echo "table2 =>". $table2->dinner(10)->lunch(20)->coldDrink(20)->bill;