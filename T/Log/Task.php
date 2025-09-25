<?php
require_once "./Logging.php";
class Task{
    use Logging;
    private $title;
    private $status;

    public function __construct($title)
    {
        $this->title = $title;
        $this->status = "pending";//assign
       // $this->log("Assign Task::$this->title".PHP_EOL);
    }
    public function complete(){
        
        $this->status = "completed";//reassign
//$this->log("Completd Task: $this->title is completed".PHP_EOL);
        
    }
    public function getTitle(){
        //$this->log("Title: $this->title".PHP_EOL);
        return $this->title;
    }
      public function getStatus(){
        //$this->log("Status: $this->status".PHP_EOL);
        return $this->status;

    }
}

//$task1 = new Task("Make a Homework");
//$task1->getTitle();
//$task1->getStatus();
//$task1->complete();
//$task1->getTitle();
//$task1->getStatus();

//$task2 = new Task("Do a Cleaning");
//$task2->getTitle();
//$task2->getStatus();
//$task2->complete();
//$task2->getTitle();
//$task2->getStatus();