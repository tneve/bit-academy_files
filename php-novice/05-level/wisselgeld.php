<?php

define('MONEY_UNITS', [50, 20, 10, 5, 2, 1, 0.50, 0.20, 0.10, 0.05]);

function check_input($argv)
{
    try {
        if (count($argv) == 1) {
            throw new Exception("Verkeerd aantal argumenten. Roep de applicatie
            aan op de volgende manier: 'wisselgeld.php <bedrag> " . PHP_EOL);
        } elseif ($argv[1] < 0) {
            throw new Exception("Input moet een positief getal zijn." . PHP_EOL);
        } elseif ((count($argv) > 2) or (!is_numeric($argv[1]))) {
            throw new Exception("Input moet een geldig getal zijn." . PHP_EOL);
        }
    } catch (Exception $er) {
        exit("Error opgevangen: " . $er->getMessage() . PHP_EOL);
    }
}

function convert_5cent($x)
{
    $x = 5 * (round($x / 5));
    return $x;
}



function geef_terug($x)
{
    if ($x == 0) {
        echo ("Geen wisseldgeld!" . PHP_EOL);
    }
    foreach (MONEY_UNITS as $geldeenheid) {
        if ((100 * $geldeenheid) <= $x) {
            $aantalKeerGeldhoeveelheidInBedrag = floor($x / (100 * $geldeenheid));
            $x = $x % (100 * $geldeenheid);
            if ($geldeenheid < 1) {
                echo ($aantalKeerGeldhoeveelheidInBedrag . " x " . (100 * $geldeenheid) . " cent" . PHP_EOL);
            } else {
                echo ($aantalKeerGeldhoeveelheidInBedrag . " x " . $geldeenheid . " euro" . PHP_EOL);
            }
        }
    }
}
check_input($argv);

$bedrag_in_centen = floatval($argv[1]) * 100;
$bedrag_in_centen = convert_5cent($bedrag_in_centen);
geef_terug($bedrag_in_centen);
