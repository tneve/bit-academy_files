<?php

for ($i = 0; $i < $argc; $i++) {
    if ($argv[$i] == "") {
        $argv[$i] = 0;
    }
}

$links = intval($argv[1]);
$rechts = intval($argv[2]);
$beschikbaar = $argv;
unset($beschikbaar[0]);
unset($beschikbaar[1]);
unset($beschikbaar[2]);
$beschikbaar = array_values($beschikbaar);

class Scale
{
    public $links;
    public $rechts;

    function isInBalance($links, $rechts, $beschikbaar)
    {
        $res = "Niet in balans";
        if ($links == $rechts) {
            $res = "In balans";
        } else if ($links < $rechts) {
            $verschil = $rechts - $links;
        } else {
            $verschil = $links - $rechts;
        }
        for ($i = 0; $i < count($beschikbaar); $i++) {
            if ($beschikbaar[$i] == $verschil) {
                $res = "Te balanceren met " . $beschikbaar[$i];
            }
        }
        for ($i = 0; $i < count($beschikbaar); $i++) {
            for ($j = $i + 1; $j < count($beschikbaar); $j++) {
                if (($beschikbaar[$i] + $beschikbaar[$j]) == $verschil) {
                    $res = "Te balanceren met " . $beschikbaar[$i] . ", " . $beschikbaar[$j];
                }
            }
        }
        echo $res;
    }
}


$x = new Scale();
$x->isInBalance($links, $rechts, $beschikbaar);