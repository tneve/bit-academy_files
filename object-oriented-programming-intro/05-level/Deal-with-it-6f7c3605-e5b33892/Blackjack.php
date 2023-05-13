<?php

include_once("Card.php");
include_once("Deck.php");
include_once("Player.php");
include_once("Dealer.php");


class Blackjack
{
    public function scoreHand(array $hand): string
    {
        $score = 0;
        foreach ($hand as $card) {
            $score += $card->score();
        }
        switch (true) {
            case ($score > 21):
                $result = "Busted";
                break;
            case (($score == 21) and (count($hand) == 2)):
                $result = "Blackjack";
                break;
            case (($score == 21) and (count($hand) > 2)):
                $result = "Twenty-One";
                break;
            case (($score < 21) and (count($hand) == 5)):
                $result = "Five Card Charlie";
                break;
            default:
                $result = $score;
        }
        return $result;
    }
}
