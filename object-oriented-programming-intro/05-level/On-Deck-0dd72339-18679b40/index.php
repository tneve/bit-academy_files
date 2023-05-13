<?php

require_once("Card.php");
require_once("Deck.php");
require_once("Player.php");

$deck = new Deck();
$player1 = new Player("player 1");
for ($i = 1; $i < 4; $i++) {
    $player1->addCard($deck->drawCard());
}
echo $player1->showHand();
