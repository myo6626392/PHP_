<?php
class UserGetSet{
    private $name = "bobo";
    private $age = 20;
    private $address = "yangon";
    private $phone = "091234567";
    public function getName(){
        return $this->name."\n";
    }
    public function setName($name){
        $this->name = $name."\n";

    }
    public function getAge(){
        return $this->age."\n";
    }
    public function setAge($age){
        $this->age = $age;
    }
       public function getAddress(){
        return $this->address."\n";
    }
    public function setAddress($address){
        $this->address = $address;
    }
       public function getPhone(){
        return $this->phone."\n";
    }
    public function setPhone($phone){
        $this->phone = $phone;
    }

}
$userGetSet = new UserGetSet;
echo $userGetSet->getName();
$userGetSet->setName("BoBo");
echo $userGetSet->getName();

echo $userGetSet->getAge();
$userGetSet->setAge(22);
echo $userGetSet->getAge();

echo $userGetSet->getAddress();
$userGetSet->setAddress("Kyi Myint Daing");
echo $userGetSet->getAddress();

echo $userGetSet->getPhone();
$userGetSet->setPhone("091234563");
echo $userGetSet->getPhone();









class User {
    public $name = "bobo";
    public $age = 34;
    public function profile (){
        return "my name is $this->name and age is $this->age\n";
    }
}
$user = new User;
//echo $user->name;
//echo "\n";
//echo $user->age;
//echo "\n";
//echo $user->profile();



class User2 {
    //old version used
    public $name;
    public $age;

  
    
    public function __construct($name,$age){
        $this->name =$name;
        $this->age = $age;
        //echo "User created\n";     
    
        
    }
    
    public function __destruct()
        {
            echo "User deleted\n";
        }
          public function profile(){
            return "my name is $this->name and age is $this->age\n";
        }
        
}

$user2 = new User2("bobo",40);
//echo $user2->profile();

//latest version used
class User3{
  
    public function __construct(public $name, public $age){
        echo "User created latest version \n";
    }
    public function __destruct(){
        echo "User deleted latest version \n";
    }
  
        public function profile(){
            return "my name is $this->name and age is $this->age";
        }
    }

    $user3 = new User3("rose", 30);
    //echo $user3->name = "bobo";

    //echo $user3->age;
    //echo $user3->profile();