<?php

function dateToday() {
    echo date('Y-m-d H:i:s');
   }
dateToday();
sleep(1);
echo '<br>';
dateToday();
echo '<br>';
echo '<br>';

function vypisPozdrav($denniDoba, $osloveni) {
    echo "Dobré $denniDoba, $osloveni!";
}
$denniDoba = 'ráno';
vypisPozdrav($denniDoba, 'Karle');
// vypíše: Dobré ráno, Karle!

