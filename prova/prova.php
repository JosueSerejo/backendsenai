<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../prova/_css/style.css">

    <title>Document</title>
</head>
<body>

<main>
    <div class="font">
    
<?php

$produto=$_GET["codpro"];


function produtos ($produto){

if ($produto == 1) {
    echo "SEU PRODUTO TEM COMO ORIGEM A REGIÃO: SUL<br>";
    echo "<img src='../prova/_img/brazil.png'>";

}

elseif ($produto == 2) {
    echo "SEU PRODUTO TEM COMO ORIGEM A REGIÃO: NORTE<br>";
    echo "<img src='../prova/_img/brazil.png'>";

}

elseif ($produto == 3) {
    echo "SEU PRODUTO TEM COMO ORIGEM A REGIÃO: LESTE<br>";
    echo "<img src='../prova/_img/brazil.png'>";

}
elseif ($produto == 4) {
    echo "SEU PRODUTO TEM COMO ORIGEM A REGIÃO: OESTE<br>";
    echo "<img src='../prova/_img/brazil.png'>";

}

elseif ($produto == 5 or $produto == 6) {
    echo "SEU PRODUTO TEM COMO ORIGEM A REGIÃO: NORDESTE<br>";
    echo "<img src='../prova/_img/brazil.png'>";

}

elseif ($produto == 7 or $produto == 8 or $produto == 9) {
    echo "SEU PRODUTO TEM COMO ORIGEM A REGIÃO: SUDESTE<br>";
    echo "<img src='../prova/_img/brazil.png'>";

}

elseif ($produto == 10) {
    echo "SEU PRODUTO TEM COMO ORIGEM A REGIÃO: CENTRO-OESTE<br>";
    echo "<img src='../prova/_img/brazil.png'>";

}

elseif ($produto == 11) {
    echo "SEU PRODUTO TEM COMO ORIGEM A REGIÃO: NOROESTE<br>";
    echo "<img src='../prova/_img/brazil.png'>";

}

else {
    echo "SEU PRODUTO É IMPORTADO<br>";
    echo "<img src='../prova/_img/mundi.png'>";

}


};

produtos ($produto);
?>

</div>

<a href="../prova/index.html">CONSULTAR NOVAMENTE</a>
</main>

</body>
</html>