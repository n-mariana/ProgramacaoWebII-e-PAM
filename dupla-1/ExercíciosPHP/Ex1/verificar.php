<?php
$n = $_GET["n"];
if ($n >= 100 && $n <= 200) {
    echo "O número está entre 100 e 200.";
} else {
    echo "O número NÃO está entre 100 e 200.";
}
?>