<?php 
if (isset($_GET["y"])) {
    $y = $_GET["y"];

    if ($y % 400 == 0 || ($y % 4 == 0 && $y % 100 != 0)) {
        echo "<h2>$y é bissexto</h2>";
    } else {
        echo "<h2>$y não é bissexto</h2>";
    }
} else {
    echo "Nenhum ano foi informado.";
}
?>
