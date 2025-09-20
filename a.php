<?php
class A{
    private $username;
    private $password;
    private $email;
    
    public function setUsername($name){
        $this->username = $name;
    }
    public function setPassword($password){
        $this->password = password_hash($password,PASSWORD_DEFAULT);
    }
    public function setEmail($email){
        $this->email = $email;
    }
}
$bobo = new A;
$bobo->setUsername("bobo");
$bobo->setPassword("567890");
$bobo->setEmail("bobo@gmail.com");

print_r($bobo);