<?php

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
        echo ("Error opgevangen: " . $er->getMessage() . PHP_EOL);
    }
}
check_input($argv);
