<?php
trait Logging{
    public function log($message){
        $timestamp = date('Y-m-d H:i:s');
        $message = "[$timestamp] LOG: $message".PHP_EOL;
        echo $message;
        
    }
}

class Task{
    use Logging;
    private $title;
    private $status;
    
    public function __construct($title)
    {
        $this->title = $title;
        $this->status = "pending";
        $this->log("Task created:$title");
    }
    public function complete(){
        $this->status = "completed";
        $this->log("Task completed: $this->title");
    }
    public function getTitle(){
        return $this->title;
    }
     public function getStatus(){
        return $this->status;
    }
}

class User {
    use Logging;
    private $name;
    public function __construct($name){
        $this->name = $name;
        $this->log("User created: $name");

    }
    public function assignTask(Task $task){
        $this->log("Task assigned to $this->name {$task->getTitle()}");
    }
    
}

$user = new User('John Doe');
$task = new Task('to read a book');
echo $task->getTitle();
echo $task->getStatus();
$user->assignTask($task);
$task->complete();
echo $task->getTitle();
echo $task->getStatus();