<?php

function soucet($a, $b) {
    return $a + $b;
    echo 'konec funkce'; // tento kód se nikdy nevykoná
}

$soucet = soucet(2, 3);
echo $soucet;

