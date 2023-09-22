<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
$h = date("H");

if($h >= 0 && $h < 12){
    echo "<p>" .$h. "hs. Bom dia á todos </p>";
}

else if($h >= 12 && $h < 18){
    echo "<p>" .$h. "hs. Boa tarde á todos </p>";
}

else if($h >= 18 && $h < 24){
    echo "<p>" .$h. "hs. Boa Noite á todos </p>";
}

?>
</body>
</html>