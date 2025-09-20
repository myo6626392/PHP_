<?php
class getset{
    //profile -> name,age,phone,address,gender
    public $name = "bobo";
    public $age = 30;
    public $phone = "0934567844";
    public $address = "Yangon";
    public $gender;

    public function setName($name){
        $this->name = $name;
        return $this->name."\n";
    }
    public function getName(){
               return $this->name."\n";

    }
     public function setAge($age){
        $this->age = $age;
        return $this->age."\n";
    }
    public function getAge(){
               return $this->age."\n";

    }
      public function setAddress($address){
        $this->address = $address;
        return $this->address."\n";
    }
    public function getAddress(){
               return $this->address."\n";

    }
      public function setPhone($phone){
        $this->phone = $phone;
        return $this->phone."\n";
    }
    public function getPhone(){
        return $this->phone."\n";
    }
    public function gender($gender){
        $this->gender = strtolower($gender);
        if($this->gender === "male"){
            return "male"."\n";

        }return "female"."\n";
    }
}

$ayeaye = new getset;
//echo $ayeaye->getName();
//echo $ayeaye->setName("ayaye");
//echo $ayeaye->gender("female");
//echo $ayeaye->getAge();
//echo $ayeaye->setAge(33);
//echo $ayeaye->getAge();
//echo $ayeaye->getAddress();
//echo $ayeaye->setAddress("Mandalay");
//echo $ayeaye->getAddress();
//echo $ayeaye->getPhone();
//echo $ayeaye->setPhone("09999999954");
//echo $ayeaye->getPhone();


class User{
    public $name = "HlaHla";
    public $age = 39;

    public function profile($name,$age){
        $this->name = $name;
        $this->age =$age;
        return "My name is $name and my age is $age.";
    }
}

$hlahla = new User;
echo $hlahla->profile("HlaHla",39);

class User2{
    public $name;
    public $age;

    public function __construct($name,$age){
        $this->name = $name;
        $this->age =$age;
        
        
    }
    public function profile(){
        return "My name is $this->name and my age is $this->age.";
    }
}

$bobo = new User2("bobo",29);
echo $bobo->profile();

class User3{
    public function __construct(public $name, public $age)
    {
        $this->name = $name;
        $this->age = $age;
        
    }
    public function profile(){
        return "My name is $this->name and my age is $this->age.";
    }
    public function __destruct()
    {
        echo "user deleted latest version";
    }
}
$ayeaye = new User3("ayaye",33);
echo $ayeaye->profile();
echo $ayeaye->age;
echo $ayeaye->name;