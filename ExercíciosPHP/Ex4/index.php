<!--Data: 20/03/2026
Autor: Maria Eduarda Nascimento dos Santos; Mariana da Silva Gonçalves
Objetivo:

Leia um número n e imprima n linhas no seguinte formato (exemplo para n = 6):

1
1 2
1 2 3
1 2 3 4
1 2 3 4 5
1 2 3 4 5 6
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>
<body>
    
    <form action="" method="GET">
        <label>Digite um número:</label>
        <input type="number" name="n" required>
        <br>

        <input type="submit" value="Imprimir">
    </form>

<?php 

if (isset($_GET['n'])) {
    $n = (int) $_GET['n'];

    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j . " ";
        }
        echo "<br>"; 
    }
}

?>

</body>
</html>
