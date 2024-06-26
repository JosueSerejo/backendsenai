<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <link rel="stylesheet" href="../fatorial/_css/style.css">
    <title>Document</title>
</head>
<body>

<main>

   
<?php

$numero=$_GET["n"];

$fat = 1;
for($contador = $numero; $contador >= 1; $contador--){
$fat = $fat * $contador;

};

echo "<div class='letra'> O numero digitado foi: $numero </div><br>";
echo "<div class='letra'>O valor de $numero! é: $fat </div>";

?>

</main>

</body>
</html>