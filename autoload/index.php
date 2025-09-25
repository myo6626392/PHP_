<?php
include "./autoload.php";

$school = new School(new Student, new ClassTime);
$school->getTime();
$school->getStudent();