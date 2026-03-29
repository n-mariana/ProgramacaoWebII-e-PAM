<?php

$temp = $_GET["n"];
$tipo = strtoupper($_GET["t"]); // deixa maiúsculo

if ($tipo == "F") {
    $c = 5/9 * ($temp - 32);
    echo "Resultado: $c °C";
} elseif ($tipo == "C") {
    $f = ($temp * 9/5) + 32;
    echo "Resultado: $f °F";
} else {
    echo "Digite apenas F ou C!";
}

?>