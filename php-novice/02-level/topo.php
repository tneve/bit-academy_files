<?php
$score = 0;
$hoofdstad = array(
    "Japan" => "Tokyo",
    "Mexico" => "Mexico City",
    "USA" => "Washington D.C.",
    "India" => "New Delhi",
    "Zuid-Korea" => "Seoul",
    "China" => "Peking",
    "Nigeria" => "Abuja",
    "Argentina" => "Buenos Aires",
    "Egypt" => "Cairo",
    "UK" => "London"
);
foreach ($hoofdstad as $x => $x_value) {
    $antwoord = readline("Wat is de hoofdstad van " . $x . "? ");
    if ($antwoord == $x_value) {
        $score = $score + 1;
        echo ("Correct!") . PHP_EOL;
    } else {
        echo ("Helaas, " . $antwoord . " is niet de hoofdstad van " . $x . ".") . PHP_EOL;
        echo ("Het correcte antwoord is: " . $x_value) . PHP_EOL;
    }
}
echo ("Je hebt " . $score . " van de 10 goed geraden");
