<?php

$n_fr = readline("Hoeveel vrienden zal ik vragen om hun droom?") . PHP_EOL;
if (!is_numeric($n_fr)) {
    exit($n_fr . " is geen getal, probeer het opnieuw.");
}
$all_dreams = [];


for ($i = 0; $i < $n_fr; $i++) {
    $naam = readline("Wat is jouw naam?" . PHP_EOL);
    $n_dr = readline("Hoeveel dromen ga je opgeven?" . PHP_EOL);
    if (!is_numeric($n_dr)) {
        exit($n_dr . " is geen getal, probeer het opnieuw.");
    }
    $droom = [];
    for ($j = 0; $j < $n_dr; $j++) {
        $droom[$j] = readline("Wat is jouw droom?" . PHP_EOL);
    }
    $all_dreams[$naam] = $droom;
}
foreach ($all_dreams as $naam => $droom) {
    foreach ($droom as $x) {
        echo ($naam . " heeft dit als droom: " . $x) . PHP_EOL;
    }
}
