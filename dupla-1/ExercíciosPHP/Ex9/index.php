<!--
Data: 28/03/2026
Autor: Maria Eduarda Nascimento dos Santos; Mariana da Silva Gonçalves
Objetivo:

Exercício 9 - Média Aritmética com Função
Crie uma função:

function media($v)

Que receba uma lista de números reais e retorne a média aritmética.
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9 - Média Aritmética</title>
</head>
<body>

<h2>Digite uma lista de números e diremos qual é a média aritmética (separe os números por vírgula):</h2>

<form action="media.php" method="get">
    <label>Digite os números: </label>
    <input type="text" name="v" required>
    <input type="submit" value="Calcular">
</form>

</body>
</html>
