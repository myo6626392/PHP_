<?php 
class User{
    //const variable (Bapital Letter)
    // direct so set // 
    const GENDER = "female";
    public static $name = "rose";
    static public $number = 0;
    static public function increment(){
        return self::$number++;
        
    }
     static public function decrement(){
        return self::$number--;
        
    }
    static public function reset(){
        return self::$number = 0;
    }
    static public function getName(){
        return self::$name;
    }
    static public function getGender(){
        return self::GENDER;

    }
    static public function login($email,$password){
        if($email && $password){
            return true;
        }return false;
    }
    static public function route($path, $cb){
        $cb();
    }
   
}
 User::route("/project",function(){
        echo "project";
    });
     User::route("/about",function(){
        echo "about";
    });
    //scope resolution operator(::)
   User::increment();
    User::increment();
      User::increment();
    echo User::$number;
     User::increment();
    echo User::$number;