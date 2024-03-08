<?php

// library

class Job {
    public function task ($logger){
        for($i = 0; $i<10; $i++){
            $logger ->log("task done! # $i");
        }
    }
}

class ConsoleLogger {
    public function log($message){
        echo $message . "\n";
    }
}

// usage code
class NothingLogger{
    public function log ($message)
    
}


$job = new Job();
$job->task();