<?php

$links = $argv[1];
$rechts = $argv[2];
$beschikbaar = $argv;
unset($beschikbaar[0]);
unset($beschikbaar[1]);
unset($beschikbaar[2]);
$beschikbaar = array_values($beschikbaar);

class Scale
{
    public $links;
    public $rechts;

    function isInBalance($links, $rechts)
    {
        if ($links == $rechts) {
            echo "In balans";
        } else {
            echo "Niet in balans";
        }
    }
}

$x = new Scale;
$x->isInBalance($links, $rechts);