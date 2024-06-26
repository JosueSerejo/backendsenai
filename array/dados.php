<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../array/style.css">
    <title>Document</title>
</head>
<body>

<main>

<?php


$numero = array(
    $n1=$_GET['number1'],
    $n2=$_GET['number2'],
    $n3=$_GET['number3'],
    $n4=$_GET['number4'],
    $n5=$_GET['number5'],
    $n6=$_GET['number6'],
    $n7=$_GET['number7'],
    $n8=$_GET['number8'],
    $n9=$_GET['number9'],
    $n10=$_GET['number10'],
);


echo "Os números digitados foram: ";
foreach ($numero as $exibir){
    echo $exibir. ", " ;
}

$soma = array_sum($numero);
echo "<br>A soma dos números do array é: $soma <br>";

$maior = max($numero);
echo "O maior valor do array é: $maior<br>";

$menor = min($numero);
echo "O menor valor do array é: $menor<br>";


$repetido= array_unique($numero);
echo "Ordem crescente sem repetições: ";
sort($repetido);
foreach($repetido as $ordem ){
echo $ordem. ", ";
};




?>

</main>
    
</body>
</html>