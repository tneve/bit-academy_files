<?php

echo "Vul een getal in" . PHP_EOL;
$getal = readline();
if ($getal % 2 == 0) {
    echo "Dit is een even getal" . PHP_EOL;
} else {
    echo "Dit is een oneven getal" . PHP_EOL;
}

?>