<?php


class bill{
    public $bill;
    public $breakFast = 2000;
    public $lunch = 5000;
    public $dinner = 3000;

    // menu,bill,person
    public function breakFast($person){
    $this->bill += $this->breakFast * $person;
    return $this;

    }
    public function lunch($person){
        $this->bill += $this->lunch * $person;
            return $this;
;
    }
    public function dinner($person){
        $this->bill += $this->dinner * $person;
            return $this;

    }
}

$table1 = new bill;
echo "Total price of Breakfast for 26 people =>" .$table1->breakFast(26)->bill."\n";
echo "Total price of lunch for 26 people =>" .$table1->lunch(26)->bill."\n";
echo "Total price of dinner for 26 people =>" .$table1->dinner(26)->bill."\n";
echo "Total price of breakfast, lunch and dinner for 26 people =>" .$table1->breakFast(26)->lunch(26)->dinner(26)->bill."\n";

$table2 = new bill;
echo "Total price of Breakfast for 50 people =>" .$table2->breakFast(50)->bill."\n";
echo "Total price of lunch for 50 people =>" .$table2->lunch(50)->bill."\n";
echo "Total price of dinner for 50 people =>" .$table2->dinner(50)->bill."\n";
echo "Total price of breakfast, lunch and dinner for 50 people =>" .$table2->breakFast(50)->lunch(50)->dinner(50)->bill."\n";