<?php
require_once "./TestLogging.php";
require_once"./TestTask.php";

class User extends TestTask{
    use TestLogging;
    private $name;
    private $password;
    
    public function __construct($name,$password){  
        $this->name = $name;
        $this->password = $password;
        $this->log("User Created: $name and Password Created:$password");

                }
        public function getUser(){
           $this->log("User Name:$this->name");
            
        
    }
     public function assignTask(){
        $this->log("Task assigned to $this->name {$this->getTitle()}");
    }

    
}
  $user1 = new User("MM",45678);
  $user1->assignTask();