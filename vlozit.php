<?php
if (isset($_POST['jmeno'], $_POST['vzkaz']) && strlen($_POST['jmeno'])>0 && strlen($_POST['vzkaz'])>0 ) {  
    
        $handle = @fopen('prispevky.txt','a');
        $jmeno = $_POST['jmeno'];
        $vzkaz = $_POST['vzkaz'];
        $text = $jmeno.';'.$vzkaz."<hr> \n";
        echo "<strong>$jmeno</strong>
          <br>
          $vzkaz
          <hr>";
        fwrite($handle, $text);
        fclose($handle);            
      
    echo 'Váš vzkaz byl úspěšně uložen!
          <br>
          <br>
          <a href="navstevni-kniha.php">Zpět na návštěvní knihu</a>';           
} elseif (isset($_POST['jmeno'], $_POST['vzkaz']) && strlen($_POST['jmeno'])>0 && strlen($_POST['vzkaz'])<1 ) {
    echo 'Napište svůj vzkaz!
          <br>
          <br>
          <a href="navstevni-kniha.php">Zpět na návštěvní knihu</a>';
} elseif (isset($_POST['jmeno'], $_POST['vzkaz']) && strlen($_POST['jmeno'])<1 && strlen($_POST['vzkaz'])>0 ) {
    echo 'Vyplňte vaše jméno!
          <br>
          <a href="navstevni-kniha.php">Zpět na návštěvní knihu</a>';
}  else {
    echo 'Vzkaz nebyl uložen, zkontrolujte vyplnění jména a vašeho vzkazu!
          <br>
          <br>
          <a href="navstevni-kniha.php">Zpět na návštěvní knihu</a>';
}