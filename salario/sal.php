<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../salario/_css/style.css">
    <title>Document</title>
</head>
<body>
    
<main>

<?php

$numero = array(
    $nome=$_GET['colab'],
    $salario=$_GET['sala'],
    $hora=$_GET['hor'],

);

$SalBruto = ($salario * $hora);

$PCir = 0.11;
$PCinss = 0.08;
$PCsindicato = 0.05;

$ValorIr = $SalBruto * $PCir;
$Valorinss = $SalBruto * $PCinss;
$Valorsindicato = $SalBruto * $PCsindicato;

$ValorLiquido = $SalBruto - $ValorIr - $Valorinss - $Valorsindicato;



ob_flush();
flush();
sleep(1);
echo "Nome do colaborador: $nome <br>";
ob_flush();
flush();
sleep(1);
echo "Valor recebido (HORA): R$ $salario <br>";
ob_flush();
flush();
sleep(1);
echo "Carga horária trabalhada (MÊS): $hora horas <br>";
ob_flush();
flush();
sleep(1);
echo "O Salário Bruto do colaborador $nome é: R$ $SalBruto <br>";
ob_flush();
flush();
sleep(1);
echo "O valor Imposto de Renda: R$  $ValorIr <br>";
ob_flush();
flush();
sleep(1);
echo "O valor INSS: R$ $Valorinss <br>";
ob_flush();
flush();
sleep(1);
echo "O valor Sindicato: R$  $Valorsindicato <br>";
ob_flush();
flush();
sleep(1);
echo "SALÁRIO LIQUIDO: R$ $ValorLiquido <br>";

$salariomin = ($SalBruto/1412);
ob_flush();
flush();
sleep(1);
switch ($salariomin) {
    case ($salariomin <= 1);
    echo "Você recebe UM salário minimo ou menos";
    break;
    case (($salariomin > 1) && ($salariomin <= 2));
    echo "Você recebe DOIS salários minimos ou menos";
    break;
    case (($salariomin > 2) && ($salariomin <= 3));
    echo "Você recebe TRÊS salários Minimos ou menos";
    break;
    case ($salariomin > 3);
    echo "Você recebe MAIS DE TRÊS salários Minimos";
    break;


}



?>

</main>



</body>
</html>