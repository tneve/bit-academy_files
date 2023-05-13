<?php

require_once('Card.php');
require_once('Deck.php');
require_once('Blackjack.php');

class Player
{
    private string $name;
    private array $hand = [];
    public $mybj;
    public $pass = false;

    public function __construct($name, Blackjack $blackjack)
    {
        $this->name = $name;
        $this->mybj = $blackjack;
    }

    public function addCard(Card $card)
    {
        array_push($this->hand, $card);
    }
    public function showHand(): string
    {
        $result = $this->name . " has";
        foreach ($this->hand as $card) {
            $result = $result . " " . $card->show();
        }
        return $result . PHP_EOL;
    }

    public function getScore(): string
    {
        $x = $this->mybj->scoreHand($this->hand);
        return $x;
    }
}
