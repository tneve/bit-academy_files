<?php

class MyLogger
{
    private function logWithTime($message, $level)
    {
        $date = "[" . date("Y-m-d H:i") . "]";
        $x = $date . " " . $level . ": " . $message;
        echo "<script>console.log('$x');</script>";
    }
    
    public function warning($mess)
    {
        $this->logWithTime($mess, "WARNING");
    }

    public function info($mess)
    {
        $this->logWithTime($mess, "INFO");
    }

    public function error($mess)
    {
        $this->logWithTime($mess, "ERROR");
    }

    public function debug($mess)
    {
        $this->logWithTime($mess, "DEBUG");
    }
}

$logger = new MyLogger();
$logger->error("Dit is een error");

