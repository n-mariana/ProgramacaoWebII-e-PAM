<!--
Data: 28/03/2026
Autor: Maria Eduarda Nascimento dos Santos
Objetivo:

Exercício 10 - Ano Bissexto
Leia um ano e informe se ele é bissexto.

Um ano é bissexto se:

É múltiplo de 400
ou
É múltiplo de 4 e não é múltiplo de 100
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10</title>
</head>
<body>

<h2>Digite um ano e diremos se ele é bissexto ou não!</h2>

<form action="" method="$_GET">
    <label>Digite um ano: </label>
    <input type="number" name="y">
    <input type="submit" value="Verificar">
</form>

<?php 
if (isset($_GET["y"])){
    $y = $_GET["y"];

    if($y % 400 == 0 || $y % 4 == 0 && $y % 100 != 0){
    echo $y . " é bissexto";
    }
    else{
    echo $y . " não é bissexto";
    }
}
?>
    
</body>
</html>