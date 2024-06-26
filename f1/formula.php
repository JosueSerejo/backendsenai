<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../f1/_css/style.css">
    <title>Document</title>
</head>
<body>


<section>
<div class="texto">

<?php
    
$comprimento=$_GET["comp"];
$quntvoltas=$_GET["voltas"];
$abastecimento=$_GET["abast"];
$combustivel=$_GET["combus"];

$totalkm = $comprimento / 1000;
$totalperc = $totalkm * $quntvoltas;
$gastocomb =  ($totalperc / $combustivel);
$primpitstop = ceil ( $gastocomb / $abastecimento);


echo "Tamanho total da pista:  $totalkm Km <br> ";
echo "Total a ser percorrido: $totalperc Km <br>";
echo "Total de litros necessários até o grande prêmio:  $gastocomb L<br> ";
echo "Mínimo de litros necessários até o primeiro abastecimento:  $primpitstop L <br> ";
 
?>
</div>

<a id="volta" href="../f1/index.html">CALCULAR NOVAMENTE</a>


<section>



</body>
</html>