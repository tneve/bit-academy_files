<?php

class MyLogger
{
    public function log($message, $level)
    {
        $x = $level . ": " . $message;
        echo "<script>console.log('$x');</script>";
    }

    public function warning($mess)
    {
        $this->log($mess, "WARNING");
    }

    public function info($mess)
    {
        $this->log($mess, "INFO");
    }

    public function error($mess)
    {
        $this->log($mess, "ERROR");
    }

    public function debug($mess)
    {
        $this->log($mess, "DEBUG");
    }
}

$mijnLogger = new MyLogger();
$mijnLogger->log("Hello world!", "SPACESHIP");
$mijnLogger->warning("Er ging iets mis");
$mijnLogger->error("Er ging wat anders mis");

