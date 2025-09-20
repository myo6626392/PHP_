<?php
trait TestLogging{
    public function log($message){
        $timeStamp= date('Y:m:d H:m:s');
        $message = "[$timeStamp] Log::$message".PHP_EOL;
        echo $message;

    }
}