<?php

require_once("Card.php");

$card1 = new Card();
$card1->suit = "klaveren";
$card1->value = "boer";
$card2 = new Card();
$card2->suit = "ruiten";
$card2->value = "boer";
$card3 = new Card();
$card3->suit = "ruiten";
$card3->value = "5";
echo $card1->show() . PHP_EOL;
echo $card2->show() . PHP_EOL;
echo $card3->show() . PHP_EOL;

