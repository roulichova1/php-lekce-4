<?php

$handle = fopen('soubor.txt', 'r');
if ($handle) {
    while (($line = fgets($handle, 1000)) !== false) {
        echo $line; // zde se vypíše jeden řádek souboru
        echo '<hr>';
    } 
    fclose($handle);
}
// if (isset($row[0], $row[1]) - ověření, zda sloupce vlastně existují;