<?php


function maximum($jedna, $dve) {
    if (!is_numeric($jedna) || !is_numeric($dve)) {
        echo 'není číslo';
    } else {
        if ($jedna > $dve) {
            echo $jedna;
        } else {
            echo $dve;
        } 
    }
}

maximum(304,560);
echo '<br>';
maximum(7.2,1.1);
echo '<br>';
maximum(23,23);
echo '<br>';
maximum(253,'x');
echo '<br>';
maximum('y',2);