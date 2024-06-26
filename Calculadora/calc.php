<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Calculadora/_css/calc.css">

    <title>Tabuada</title>
</head>
<body>
    <?php
    $numeroum=$_GET["n1"];
    $numerodois=$_GET["n2"];
    $operacao=$_GET["o"];
    
    
    if (($operacao=="-")){
        echo "O primeiro número foi: $numeroum <br>";
        echo " O segundo número foi: $numerodois<br>";        
        echo "Calculo: $numeroum $operacao $numerodois é igual a: ".($numeroum - $numerodois)."<br>";
    }

    if (($operacao=="+")){
        echo "O primeiro número foi: $numeroum <br>";
        echo " O segundo número foi: $numerodois<br>";     
        echo "Calculo: $numeroum $operacao $numerodois é igual a: ".($numeroum + $numerodois)."<br>";
    }

    if (($operacao=="*")){
        echo "O primeiro número foi: $numeroum <br>";
        echo " O segundo número foi: $numerodois<br>";     
        echo "Calculo: $numeroum $operacao $numerodois é igual a: ".($numeroum * $numerodois)."<br>";
    }

    if (($operacao=="/")){
        echo "O primeiro número foi: $numeroum <br>";
        echo " O segundo número foi: $numerodois<br>";     
        echo "Calculo: $numeroum $operacao $numerodois é igual a: ".($numeroum / $numerodois)."<br>";
    }

    if (($operacao=="√")){

    echo "A raiz quadrada de $numeroum é:  " .(sqrt($numeroum)). "<br>";
   
    }




    ?>
</body>
</html>