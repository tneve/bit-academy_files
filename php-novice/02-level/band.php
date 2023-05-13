<?php

$albums = [
    "Genesis" => 5,
    "Exodus" => 10,
    "Numbers" => 12.5,
    "Leviticus" => 7.5
];
$total_price = 0;

foreach ($albums as $book => $price) {
    $total_price = $total_price + $price;
}
$avg_price = $total_price / count($albums);

echo ("Het totaal pakket van alle albums kost " . chr(128) . $total_price) . PHP_EOL;
echo ("De gemiddelde prijs van de albums is " . chr(128) . $avg_price) . PHP_EOL;
