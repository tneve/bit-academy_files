<?php

class Card
{
    private string $suit;
    private string $value;

    public function __construct(string $suit, string $value)
    {
        
            $this->validateSuit($suit);
            $this->validateValue($value);
            $this->suit = $suit;
        $this->value = $value;
    }

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

    private function validateSuit($suit)
    {
        $possibleSuits = ['harten', 'ruiten', 'klaveren', 'schoppen'];
        if (!in_array($suit, $possibleSuits)) {
            throw new InvalidArgumentException('Ongeldige suit');
        }
    }
    private function validateValue($value)
    {
        $possibleValues = ['aas', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'boer', 'vrouw', 'heer'];
        if (!in_array($value, $possibleValues)) {
            throw new InvalidArgumentException('Ongeldige value');
        }
    }
}
