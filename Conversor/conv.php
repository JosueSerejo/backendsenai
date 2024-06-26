<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./_css/converter.css">


    <title>Document</title>
</head>
<body>
    
<?php

$numero=$_GET["n"];
echo "<div class=font> A temperatura em Fahrenheit é : $numero °F </div><br>";
echo "<div class=fonte> A temperatura em Celsius é: " .($numero-32)*5/9, " °C </div><br>";

?>

<a id="volta" href="/conversor/index.html">FAZER NOVA CONVERSÃO</a>

</body>
</html>