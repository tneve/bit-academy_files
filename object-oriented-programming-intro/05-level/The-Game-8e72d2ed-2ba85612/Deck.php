<?php

require_once("Card.php");

class Deck
{
    private array $cards = [];

    public function __construct()
    {
        $possibleSuits = ['harten', 'ruiten', 'klaveren', 'schoppen'];
        $possibleValues = ['aas', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'boer', 'vrouw', 'heer'];
        foreach ($possibleSuits as $suit) {
            foreach ($possibleValues as $value) {
                $card = new Card($suit, $value);
                array_push($this->cards, $card);
            }
        }
    }
    public function drawCard(): Card
    {
        if (count($this->cards) == 0) {
            throw new Exception('Er zijn geen kaarten meer');
        } else {
            $x = rand(0, count($this->cards) - 1);
            $drawnCard = $this->cards[$x];
            unset($this->cards[$x]);
            $this->cards = array_values($this->cards);
            return $drawnCard;
        }
    }
}
