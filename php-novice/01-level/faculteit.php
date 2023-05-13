<?php

$faculteit = 1;
$n = readline("Van welk getal wil je de faculteit weten?") . PHP_EOL;

for ($i = 1; $i <= $n; $i++) {
    $faculteit = $faculteit * $i;
}
echo ("De faculteit van " . $n . " is " . $faculteit);
