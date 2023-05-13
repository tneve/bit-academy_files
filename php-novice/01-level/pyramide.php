<?php

$hoogte = readline("Hoeveel lagen wil je bouwen?");
$string = "";

for ($i = 1; $i <= $hoogte; $i++) {
    $string = $string . "*";
    echo ($string) . PHP_EOL;
}
