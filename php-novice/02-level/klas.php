<?php
echo ("Vul in met spaties na elke naam voordat je op enter duwt") . PHP_EOL;
$klasgenoten = readline("Wie zit er in de klas?");

$klas = explode(" ", $klasgenoten);

foreach ($klas as $x) {
    echo ($x) . PHP_EOL;
}
