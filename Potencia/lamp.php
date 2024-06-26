<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Potencia/_css/lamp.css">
    
    <title>Document</title>
</head>
<body>
    

<?php

$watts=$_GET["wat"];
$largura=$_GET["lar"];
$comprimento=$_GET["com"];
$metragem = $largura * $comprimento;
$quantlamp = ceil ($metragem / ($watts/18));

echo "  <div class=lamp> A quantidade total será de: $quantlamp lâmpada(s) por m²</div>";


?>




</body>
</html>