<!DOCTYPE html>
<html lang="en">
<head>
    <title>Návštěvní kniha</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<div class="container">
    <form method="POST" action="vlozit.php">
      <div class="form-group row">
        <label for="jmeno" class="col-sm-1 col-form-label">Jméno:</label>
        <div class="col-sm-6">
          <input class="form-control" type="text" name='jmeno' placeholder="">
        </div>
      </div>
      <div class="form-group row">
        <label for="vzkaz" class="col-sm-1 col-form-label">Vzkaz:</label>
        <div class="col-sm-6">
          <textarea class="form-control" name='vzkaz' rows="3"></textarea>
        </div>
      </div>
      <button type="submit" class="btn btn-primary" name='button' value='submit'>Odeslat</button>
    </form>
    <br>
    <br>
    <div class="col-sm-8">
<?php 

if (file_exists('prispevky.txt')) {
    $handle = fopen('prispevky.txt','r');
    if ($handle) {
        while (($line = fgets($handle, 5000))!== false) {
            $row = explode(';', $line);
            echo "<strong>$row[0]</strong>
                  <br>
                  <p>$row[1]</p>";
        }
    }
    fclose($handle);
} else {
    echo '>>>Žádné příspěvky<<<';   
}
 
function seradPrispevky($prispevky, $oddelovac) {
        $pole = explode($oddelovac, $prispevky);
        //print_r($pole);
        $poleOpacne = array_reverse($pole);
        //print_r($poleOpacne);
        $novaData = implode("\n"."<hr>", $poleOpacne);
        echo $novaData;
        //return $novaData;
}

$prispevky = file_get_contents('prispevky.txt');
$oddelovac = "<hr>";
seradPrispevky($prispevky, $oddelovac);
?>
</div>
</div>
</body>
</html>