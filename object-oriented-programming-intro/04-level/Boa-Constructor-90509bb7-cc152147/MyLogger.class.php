<?php

class MyLogger
{
    public $origin;

    public function __construct($text)
    {
        if (($text == "") or empty($text)) {
            throw new Error("Geen geldige origin");
        } else {
            $this->origin = $text;
        }
    }

    private function logWithTime($message, $level)
    {
        $origin = $this->origin;
        $date = "[" . date("Y-m-d H:i") . "]";
        $x = $date . " " . $origin . " - " . $level . ": " . $message;
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

$logger = new MyLogger("TestClass");
$logger->error("Dit is een error");

