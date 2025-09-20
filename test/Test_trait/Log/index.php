<?php
require_once "./TestTask.php";
require_once "./User.php";

class Index {

    public  function allLogging(){
    $user = new User("Jhon Dose",1234567);
    $task = new TestTask("Do a work1");
    $user->getUser();
    $task->getStatus();
    $task->completed();
    $task->getStatus();
    $task->getTitle();
      $user1 = new User("MM",45678);
    $task = new TestTask("Do a work2");
    $user1->getUser();
    $task->getStatus();
    $task->completed();
    $task->getStatus();
    $task->getTitle();

    }
}
$Index = new Index();
$Index->allLogging();