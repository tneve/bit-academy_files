<?php

class Card
{
    public string $suit;
    public string $value;

    public function show(): string
    {
        switch ($this->suit) {
            case "harten":
                $this->suit = '♥️';
                break;
            case "ruiten":
                $this->suit = '♦️';
                break;
            case "klaveren":
                $this->suit = '♣️';
                break;
            case "schoppen":
                $this->suit = '♠️';
                break;
        }
        switch ($this->value) {
            case "boer":
                $this->value = "B";
                break;
            case "vrouw":
                $this->value = "V";
                break;
            case "heer":
                $this->value = "H";
                break;
            case "aas":
                $this->value = "A";
                break;
        }
        return $this->suit . $this->value;
    }
}
