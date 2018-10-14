<?php

function minimum($jedna, $dve) {
    if (!is_numeric($jedna) || !is_numeric($dve)) {
        return false;
    } else {
        if ($jedna < $dve) {
            return $jedna;
        } else {
            return $dve;
        } 
    }
}

$minimum = minimum(3,'g');
if ($minimum === false) {
    echo 'chyba';
} else {
    echo $minimum;
}

