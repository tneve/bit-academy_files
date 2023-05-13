<?php

echo "Welke operatie wil je uitvoeren? (+, -)" . PHP_EOL;
$operator = readline();
var_dump($operator);
echo "Eerste getal?" . PHP_EOL;
$getal1 = readline() . PHP_EOL;
echo " Tweede getal?" . PHP_EOL;
$getal2 = readline() . PHP_EOL;
if ($operator == "+") {
    $uitkomst = $getal1 + $getal2;
} else {
        $uitkomst = $getal1 - $getal2;
} echo "Uw resultaat is " . $uitkomst . PHP_EOL;

?>