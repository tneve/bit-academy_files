<?php

require_once("Card.php");

$card = new Card("klaveren", "boer");
echo $card->show() . PHP_EOL;

$card = new Card("schoppen", "aas");
echo $card->show() . PHP_EOL;

$card = new Card("harten", "8");
echo $card->show() . PHP_EOL;

$card = new Card("harten", "een");
echo $card->show() . PHP_EOL;

$card = new Card("schoffels", "6");
echo $card->show() . PHP_EOL;

