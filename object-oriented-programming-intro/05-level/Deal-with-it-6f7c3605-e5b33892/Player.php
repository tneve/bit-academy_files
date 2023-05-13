<?php

require_once('Card.php');
require_once('Deck.php');
require_once('Blackjack.php');
require_once('Dealer.php');

class Player
{
    private string $name;
    private array $hand = [];
    public $pass = false;
    public function __construct($name)
    {
        $this->name = $name;
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
        return $result;
    }
    public function name(): string
    {
        return $this->name;
    }
    public function hand(): array
    {
        return $this->hand;
    }
}
      

