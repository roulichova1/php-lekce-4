<?php


if (file_exists('pristupy.txt')) {
    $handle = fopen('pristupy.txt','r');
    echo 'Historie přístupů: <br>';
    $text = fread($handle, 1000);
    echo $text;
} else {
     $handle = fopen('pristupy.txt','w');
     echo 'Vítejte, na této stránce jste prvně!';
}
$datum = date('Y-m-d H:i:s'). "<br> \n";
$handle = fopen('pristupy.txt','a');
fwrite($handle, $datum);
fclose($handle);