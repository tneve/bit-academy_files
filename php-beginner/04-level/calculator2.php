<?php
$uitkomst = 0;
$op = readline("Welke operatie wil je doen? (+, -, %) " );
if (!(($op == "+") || ($op == "-") || ($op == "%"))) {
    exit($op . " is geen geldige operatie" . PHP_EOL);
} 
$getal1 = readline("Eerste getal:");
if (!is_numeric($getal1)) {
    exit($getal1 . " is geen getal!" . PHP_EOL);
} 
$getal2 = readline("Tweede getal:");
if (!is_numeric($getal2)) {
    exit($getal2 . " is geen getal!");
} if ($op == "+") {
    $uitkomst = ($getal1 + $getal2);
} if ($op == "-") {
    $uitkomst = ($getal1 - $getal2);
} else {
    $uitkomst = ($getal1 % $getal2);
}
exit("De uitkomst is " . $uitkomst) . PHP_EOL;

?>