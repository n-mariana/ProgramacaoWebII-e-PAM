<!--
Data: 27/03/2026
Autor: Maria Eduarda Nascimento dos Santos; Mariana da Silva Gonçalves
Objetivo:

Exercício 5 - Somatório de Fatoriais
Leia 5 números inteiros e mostre a soma dos fatoriais desses números.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>
<body>
    <form action="somar.php" method="$_GET">
        <label>Digite o primeiro número: </label>
        <input type="number" name="n1" required>
        <br><br>
        <label>Digite o segundo número: </label>
        <input type="number" name="n2" required>
        <br><br>
        <label>Digite o terceiro número: </label>
        <input type="number" name="n3" required>
        <br><br>
        <label>Digite o quarto número: </label>
        <input type="number" name="n4" required>
        <br><br>
        <label>Digite o quinto número: </label>
        <input type="number" name="n5" required>
        <br><br> 
        <input type="submit" value="Calcular a soma dos fatoriais">
    </form>

</body>
</html>