<?php

include_once("Card.php");
include_once("Deck.php");
include_once("Player.php");


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
                echo $result . PHP_EOL;
                exit;
                break;
            case (($score == 21) and (count($hand) == 2)):
                $result = "Blackjack";
                echo $result . PHP_EOL;
                exit;
                break;
            case (($score == 21) and (count($hand) > 2)):
                $result = "Twenty-One";
                echo $result . PHP_EOL;
                exit;
                break;
            case (($score < 21) and (count($hand) == 5)):
                $result = "Five Card Charlie";
                echo $result . PHP_EOL;
                exit;
                break;
            default:
                $result = $score . " punten." . PHP_EOL;
        }
        return $result;
    }
}
