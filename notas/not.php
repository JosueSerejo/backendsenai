<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../notas/_css/style.css">
    <title>Document</title>
</head>
<body>

<main>

<div class="letra">


<?php
    
$nome=$_GET["aluno"];
$serie=$_GET["serie"];
$notaum=$_GET["nota1"];
$notadois=$_GET["nota2"];
$notatres=$_GET["nota3"];
$notaquatro=$_GET["nota4"];
$media = ($notaum + $notadois + $notatres + $notaquatro) / 4;

echo "Nome do Aluno: $nome<br>";
echo "Série do aluno: $serie <br>";
echo "Primeira nota: $notaum pontos<br>";
echo "Segunda nota: $notadois pontos<br>";
echo "Terceira nota: $notatres pontos<br>";
echo "Quarta nota: $notaquatro pontos<br>";
echo " A média do aluno foi de: $media pontos<br>";


function med ($nome, $serie, $notaum, $notadois, $notatres, $notaquatro, $media ){

if($media >= 7){
    echo "O aluno $nome foi APROVADO com média: $media <br>";
}
elseif($media >= 5 && $media <=6.9 ){
    echo "O aluno $nome está de RECUPERAÇÃO com média: $media <br> ";
}
else {
    echo "O aluno $nome está REPROVADO com média: $media <br> ";
}

};

med ($nome, $serie, $notaum, $notadois, $notatres, $notaquatro, $media)
?>

</div>
</main>
</body>
</html>