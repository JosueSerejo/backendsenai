<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../primo/_css/style.css">

    <title>Document</title>
</head>
<body>
    
<section>

<?php  

$numero=$_GET["n"];


$contador = 0;

for($i =1; $i <= $numero; $i++)
{
if($numero % $i == 0)
{
    $contador++;
}
}
if($contador ==2)
{

    echo "O número $numero é primo";
}
  else{

    echo "O número $numero não é primo";
  }


?>

</section>

<a id="volta" href="../primo/index.html">CALCULAR NOVAMENTE</a>

</body>
</html>