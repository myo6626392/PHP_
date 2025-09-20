<?php
//inheritance
class Fruit{
    public $name;
    public $color;
    public $apple = "apple";
    public function setName($name){
        $this->name = $name;
    }
    public function setColor($color){
        $this->color = $color;
    }
}
class Mango extends Fruit{
    public $life = "50 years";
    public function juice()
    {
        echo "mango Juice";
    }
    
}
$m = new Mango;
echo $m->apple;
echo "<br>";
echo $m->setName("sein ta lone");
echo "<br>";
echo $m->name;
echo "<br>";
echo $m->life;
echo "<br>";
echo $m->juice();
echo "<br>";
echo $m->setColor("yellowgreen");
echo "<br>";
echo $m->color;

class Banana extends Fruit{
    public $life = "2years";
    public function price(){
        echo "banana price is 2000Ks";
        echo "<br>";

    }
}
$b = new Banana;
echo $b->setColor("yellow");
echo "<br>";
echo $b->name."\n";
echo "<br>";
echo $b->life;

class Grape extends Banana{
    public $life = "1year";
    public function price()
    {
        echo "grape price is 1000ks";
    }
}
$g = new Grape;
echo $g->apple;
echo $g ->price();
echo $g->setName("this is grape");
echo $g->name;
echo $g->setColor("purple");
echo $g->color;