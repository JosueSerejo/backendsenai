<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../loop/style.css">
    <title>Document</title>
</head>
<body>

<main>

<?php

$informações=$_GET["dados"];


$clientes = array(array("nome" =>"João Silva" , "idade"=>"35", "cidade"=>"São Paulo"), 
array("nome" =>"Maria Santos" , "idade"=>"28", "cidade"=>"Rio de Janeiro"),
array("nome" =>" Pedro Oliveira" , "idade"=>"42", "cidade"=>"Belo Horizonte"),
array("nome" =>" Ana Souza" , "idade"=>"30", "cidade"=>"Salvador"));

foreach ($clientes as $dados){

echo "NOME:   " .$dados['nome']."<br>";
echo "IDADE:  " .$dados['idade']."<br>";
echo "CIDADE:  " .$dados['cidade']."<br><br>";

}

?>

</main>
    
</body>
</html>