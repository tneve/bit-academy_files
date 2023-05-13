<?php
$time_s = 0;
$time_m = 0;
$time_d = 0;
$time_u = 0;
$tijd_in_seconden = 0;

for ($i = 1; $i < $argc; $i++) {
    $time = $argv[$i];
    $time_ex = explode(" ", $time);

    foreach ($time_ex as $input) {
        $letter = substr($input, -1);

        switch ($letter) {
            case "s":
                $time_s = (int) $input;
                break;
            case "m":
                $time_m = (int) $input * 60;
                break;
            case "u":
                $time_u = (int) $input * 60 * 60;
                break;
            case "d":
                $time_d = (int) $input * 60 * 60 * 24;
                break;
        }
    }

    $tijd_in_seconden = ($time_s + $time_m + $time_u + $time_d);
}
echo ($tijd_in_seconden . " seconden") . PHP_EOL;
