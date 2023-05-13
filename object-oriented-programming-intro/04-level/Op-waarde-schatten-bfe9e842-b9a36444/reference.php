<?php

$array_x = [0, 1, 2, 3, 4, 5];
function toevoegen_en_optellen(array &$getallen, $getal)
{
    array_push($getallen, $getal);
    return array_sum($getallen);
}
echo "Vardump van de array:" . PHP_EOL;
var_dump($array_x);
echo "Toevoegen en optellen met 10" . PHP_EOL;
$som = toevoegen_en_optellen($array_x, 10);
echo "Som is " . $som . PHP_EOL;
echo "Vardump van de array:" . PHP_EOL;
var_dump($array_x);
