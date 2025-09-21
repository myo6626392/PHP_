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
        $this->log("User Created: $name & Email: $email" . PHP_EOL);
    }

    public function assignTask(Task $task)
    {
        $this->tasks[] = $task;
        $this->log("$this->name was assigned task: {$task->getTitle()}" . PHP_EOL);
    }

    public function listTasks($task)
    {
        foreach ($this->tasks as $task) {
            $this->log("Task for $this->name: {$task->getTitle()} [{$task->getStatus()}]" . PHP_EOL);
        }
    }
}

// --- Example usage ---
$user = new User("MgMg", "mgmg@gmail.com");
$task1 = new Task("Make a Homework");
$task2 = new Task("Do a Cleaning");

$user->assignTask($task1);
$user->listTasks($task1);
$task1->complete();

$user->assignTask($task2);
$user->listTasks($task2);
$task2->complete();