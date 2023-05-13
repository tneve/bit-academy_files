<?php

class MyLogger
{
    public function log($message)
    {
        echo "<script>console.log('$message');</script>";
    }
}

$logger = new MyLogger();
$logger->log("Hello world!");
