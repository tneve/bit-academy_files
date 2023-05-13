<?php
$x = 1;
$faculteit = 1;

$n = readline("Hoe hoog moet de faculteit minimaal zijn?") . PHP_EOL;

while ($faculteit < $n) {
    $faculteit = $faculteit * $x;
    $x++;
}

echo ("De faculteit van " . ($x - 1) . " is " . $faculteit) . PHP_EOL;
