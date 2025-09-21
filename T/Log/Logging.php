<?php
trait Logging{
    public function log($message){
        $timeStamp = date('Y:m:d H:m:s');
        $message = "[$timeStamp]: LOG::$message".PHP_EOL;
        echo $message;
    }
}