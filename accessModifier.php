<?php
//private can accept only parent
//protected can accept in parent & extends 
class AccessModifier{
    public $name ="wtc";
    private $password = "1234456";
    protected $class = "web";
      public function getPassword(){
        return $this->password;

    }
    public function setPassword($password){
        $this->password = $password;
        return $this->password;
    }
    public function getClass(){
       return $this->class;
    }
    

    
}
$access = new AccessModifier;
//echo $access->name;
//echo $access->password; //error
//echo $access->class; //error
echo $access->getClass();
echo $access->getPassword();
echo $access->setPassword(2345678);
echo $access->getPassword();

class NewClass extends AccessModifier{
    public function __construct()
    {
        echo $this->class;
    }
  
    

}
$class = new NewClass;