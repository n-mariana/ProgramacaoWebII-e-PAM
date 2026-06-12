<!--
Data: 28/03/2026
Autor: Maria Eduarda Nascimento dos Santos; Mariana da Silva Gonçalves
Objetivo:

Exercício 10 - Ano Bissexto
Leia um ano e informe se ele é bissexto.

Um ano é bissexto se:

É múltiplo de 400
ou
É múltiplo de 4 e não é múltiplo de 100
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10 - Ano Bissexto</title>
</head>
<body>

<h2>Digite um ano e diremos se ele é bissexto ou não!</h2>

<form action="bissexto.php" method="get">
    <label>Digite um ano: </label>
    <input type="number" name="y" required>
    <input type="submit" value="Verificar">
</form>

</body>
</html>
