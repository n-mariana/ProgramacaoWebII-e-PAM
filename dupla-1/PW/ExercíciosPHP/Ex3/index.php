<!--
Data: 20/03/2026
Autor: Maria Eduarda Nascimento dos Santos; Mariana da Silva Gonçalves
Objetivo:

Exercício 3 - Calculadora Aritmética
Faça um programa que leia dois números e um operador ("+", "-", "*" ou "/").
O programa deve mostrar o resultado da operação.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    
    <form action="calcular.php" method="$_GET">
        <label>Digite o primeiro número:</label>
        <input type="number" name="n1" step="any" required>
        <br><br>

        <label> Digite o segundo número:</label>
        <input type="number" name="n2" step="any" required>
        <br><br>

        <label>Digite o operador("+", "-", "*" ou "/"):</label>
        <input type="text" name="op" maxlength="1" required>
        <br><br>

        <input type="submit" value="Calcular">
    </form>

    
</body>
</html>