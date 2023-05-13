<?php

require_once("Card.php");
require_once("Deck.php");
require_once("Player.php");
require_once("Blackjack.php");

class Dealer
{
    private Blackjack $blackjack;
    private Deck $deck;
    private array $players = [];

    public function __construct($blackjack, Deck $deck)
    {
        array_push($this->players, new Player("Dealer"));
        $this->blackjack = $blackjack;
        $this->deck = $deck;
    }

    public function addPlayer(Player $player)
    {
        array_push($this->players, $player);
    }


    public function giveStartingHands()
    {
        foreach ($this->players as $player) {
            for ($i = 1; $i <= 2; $i++) {
                $this->giveCard($player);
            }
        }
    }
    public function showHands()
    {
        foreach ($this->players as $player) {
            echo $player->showHand() . "--> " . $this->getScore($player) . PHP_EOL;
        }
    }

    public function giveCard(Player $player)
    {
        $player->addCard($this->deck->drawCard());
    }

    public function playGame()
    {
        $this->giveStartingHands();
        $this->showHands();
        $this->whatAction();
        $this->showWinner();
    }

    public function getScore(Player $player): string
    {
        $x = $this->blackjack->scoreHand($player->hand());
        return $x;
    }

    public function stopTheGame()
    {
        foreach ($this->players as $player) {
            $player->pass = true;
        }
    }

    public function passOrCard(Player $player)
    {
        if ($player->name() == "Dealer") {
            if ($this->getScore($player) < 18) {
                    echo $player->name() . " is drawing another card" . PHP_EOL;
                    $this->giveCard($player);
                echo $player->showHand() . "--> " . $this->getScore($player) . PHP_EOL;
                    $this->checkForBlackjack($player);
            } else {
                $player->pass = true;
            }
        } else {
                echo $player->name() . " it's your turn" . PHP_EOL;
            echo $player->showHand() . "--> " . $this->getScore($player) . PHP_EOL;
                $ans = readline("Do you want to draw (d) or stop (s)? .....");
            if ($ans == 'd') {
                    echo $player->name() . " is drawing another card" . PHP_EOL;
                    $this->giveCard($player);
                echo $player->showHand() . "--> " . $this->getScore($player) . PHP_EOL;
                    $this->checkForBlackjack($player);
            } else if ($ans == 's') {
                    $player->pass = true;
            } else {
                echo "Wrong input!! Choose 'd' to draw or 's' to stop !!" . PHP_EOL;
                    $this->passOrCard($player);
            }
        }
    }

    public function checkForBlackjack(Player $player)
    {
        switch ($this->getScore($player)) {
            case "Blackjack":
                $this->stopTheGame();
                break;
            case "Twenty-One":
                $this->stopTheGame();
                break;
            case "Five Card Charlie":
                $this->stopTheGame();
                break;
            case "Busted":
                if ($player->name() == "Dealer") {
                    $this->stopTheGame();
                } else {
                    $player->pass = true;
                    break;
                }
        }
    }
    public function allPlayersPassed(): bool
    {
        $allPassed = true;
        foreach ($this->players as $player) {
            if ($player->pass == false) {
                $allPassed = false;
            }
        }
        return $allPassed;
    }

    public function whatAction()
    {
        foreach ($this->players as $player) {
            $this->checkForBlackjack($player);
        }
        while ($this->allPlayersPassed() ==  false) {
            foreach ($this->players as $player) {
                if ($player->pass == false) {
                    $this->passOrCard($player);
                }
            }
        }
    }


    public function showWinner()
    {
        $dealer_score = $this->getScore($this->players[0]);
        switch ($dealer_score) {
            case "Blackjack":
            case "Twenty-One":
            case "Five Card Charlie":
                echo "Dealer has won!" . PHP_EOL;
                foreach ($this->players as $player) {
                    if ($player->name() != "Dealer") {
                        echo "Too bad. " . $player->name() . " has lost." . PHP_EOL;
                    }
                }
                break;
            case "Busted":
                echo "Dealer has lost!" . PHP_EOL;
                foreach ($this->players as $player) {
                    if ($player->name() != "Dealer") {
                        echo "Lucky you. " . $player->name() . " has won." . PHP_EOL;
                    }
                }
                break;
            default:
                $dealer_score = intval($dealer_score);
        }
        foreach ($this->players as $player) {
            if (($player->name() != "Dealer") and is_int($dealer_score)) {
                switch ($this->getScore($player)) {
                    case "Blackjack":
                    case "Twenty-One":
                    case "Five Card Charlie":
                        echo $player->name() . " has won!" . PHP_EOL;
                        break;
                    case "Busted":
                        echo $player->name() . " has lost!" . PHP_EOL;
                        break;
                    default:
                        if ($this->getScore($player) > $dealer_score) {
                            echo $player->name() . " has won!" . PHP_EOL;
                        } else {
                            echo $player->name() . " has lost!" . PHP_EOL;
                        }
                }
            }
        }
    }
}

