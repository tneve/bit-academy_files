<?php

$bucket_list = array();

//Vraag de gebruiker naar hoeveel activiteiten hij op zijn bucket list wil toevoegen.
$n = readline("hoeveel activiteiten wil je aan je bucket list toevoegen?");

//Stop de gebruiker als hij geen getal heeft ingevoerd.

if (!is_numeric($n)) {
    exit($n . " is geen getal, probeer het opnieuw.");
}

//Vraag vervolgens naar de activiteiten op de bucket list en sla ze op.
for ($i = 0; $i < $n; $i++) {
    $bucket_list[$i] = readline("Wat wil je toevoegen aan de bucket list?");
}

//Print de lijst van activiteiten op de bucket list.
echo ("Op jouw bucket list staan:") . PHP_EOL;
for ($i = 0; $i < $n; $i++) {
    echo ($bucket_list[$i]) . PHP_EOL;
}
