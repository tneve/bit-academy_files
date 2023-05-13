<?php

require_once("Card.php");
require_once("Deck.php");
require_once("Player.php");

function passOrNot(Player $player, $deck)
{
    $x = readline("Nieuwe kaart (n) of stoppen (s) ?");
    switch ($x) {
        case 'n':
            $player->addCard($deck->drawCard());
            echo $player->showHand();
            echo $player->getScore();
            break;
        case 's':
            $player->pass = true;
            break;
        default:
            echo "Vul de goede letter in!" . PHP_EOL;
            passOrNot($player, $deck);
    }
}

$deck = new Deck();
$game1 = new Blackjack();
$name = readline("Wat is je naam?... ");
$player1 = new Player($name, $game1);
for ($i = 1; $i < 3; $i++) {
    $player1->addCard($deck->drawCard());
}

echo $player1->showHand();
echo $player1->getScore();
while ($player1->pass == false) {
    passOrNot($player1, $deck);
}
echo $player1->getScore();
