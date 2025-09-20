<?php
require_once "./TestLogging.php";

class TestTask{
    use TestLogging;
    private $title;
    private $status;

    public function __construct($title)
    {
        $this->title = $title;
        $this->status = "pending";
        $this->log("Task Title created:$title").PHP_EOL;
    }
    public function completed(){
        $this->log("Task completed:$this->title").PHP_EOL;
        $this->status = "completed";

    }
    public function getTitle(){
      echo  $this->title.PHP_EOL;
    }
    public function getStatus(){
        echo $this->status.PHP_EOL;
    }

}