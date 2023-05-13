<?php

$amount = readline("Hoeveel landen ga je toevoegen?" . PHP_EOL);

if (!is_numeric($amount)) {
    exit("'$amount' is geen geldig getal, probeer het opnieuw" . PHP_EOL);
}

$city = [];

for ($i = 0; $i < $amount; $i++) {
    $country = readline("Welk land ga je toevoegen?" . PHP_EOL);

    $city[$country] = readline("Wat is de hoofdstad van " . $country . "?" . PHP_EOL);
}

echo ("De volgende landen en steden zitten in de database:" . PHP_EOL);
foreach ($city as $country => $capital) {
    echo ($country . ", " . $capital) . PHP_EOL;
}
