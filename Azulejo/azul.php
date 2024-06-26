<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Azulejo/_css/style.css">

    <title>Document</title>
</head>
<body>


<?php

$comprimento=$_GET["com"];
$altura=$_GET["alt"];
$largura=$_GET["lar"];

$area = (($comprimento + $largura )*2) * $altura;
$caixas = ceil ($area / 1.5);

echo "<div class='cx'> A area total da sala é de: $area m², logo serão necessárias:  $caixas caixas de azulejo, para cobrir todas as paredes.</div>"

?>

<a id="volta" href="../Azulejo/index.html">CALCULAR NOVAMENTE</a>


</body>
</html>