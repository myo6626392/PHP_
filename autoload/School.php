<?php

class School{
    private $student;
    private $classTime;
    
    public function __construct(Student $student,ClassTime $classTime)
    {
        $this->student = $student;
        $this->classTime = $classTime;
    }

    public function getTime(){
       echo $this->classTime->classTime();

    }
    public function getStudent(){
      echo  $this->student->student();

    }
}