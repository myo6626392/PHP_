<?php
require_once "./Logging.php";
require_once "./Task.php";

class User {
    use Logging;
    private $name;
    private $email;
    private $tasks = [];

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
      //  $this->log("User Created: $name & Email: $email" . PHP_EOL);
    }

    public function assignTask(Task $task)
    {
        $this->tasks[] = $task;
       //$this->log("$this->name was assigned task: {$task->getTitle()}" . PHP_EOL);
    }

    public function listTasks()
    {
        foreach ($this->tasks as $t) {
            print_r($t);
            //$this->log("Task for $this->name: {$t->getTitle()} [{$t->getStatus()}]" . PHP_EOL);
        }
    }
}

// --- Example usage ---
$user = new User("MgMg", "mgmg@gmail.com");
$task1 = new Task("Make a Homework");
$task2 = new Task("Do a Cleaning");
$task3 = new Task("Listen a music");
$user->assignTask($task1);
$user->assignTask($task2);
$user->assignTask($task3);
$user->listTasks($task1);

$task1->complete();
$task2->complete();
$task3->complete();
$user->listTasks();