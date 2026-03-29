<?php
if (isset($_GET["n"])) {
    $n = $_GET["n"];
    $a = 0;
    $b = 1;

    echo "<h2>Sequência de Fibonacci com $n termos:</h2>";

    for ($i = 0; $i < $n; $i++) {
        echo $a . " ";
        $proximo = $a + $b;
        $a = $b;
        $b = $proximo;
    }
} else {
    echo "Nenhum número foi informado.";
}
?>
