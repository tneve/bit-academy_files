<?php

$n = readline("Hoeveel vrienden zal ik vragen om hun droom?") . PHP_EOL;
if (!is_numeric($n)) {
    exit($n . " is geen getal, probeer het opnieuw.");
}
for ($i = 0; $i < $n; $i++) {
    $friends[$i] = readline("Wat is jouw naam?");
    $dreams[$friends[$i]] = readline("Wat is jouw droom?");
}

foreach ($dreams as $x => $x_value) {
    echo ($x . " heeft als droom: " . $x_value) . PHP_EOL;
}
