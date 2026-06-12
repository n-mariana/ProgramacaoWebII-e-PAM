<?php
if (isset($_GET["n"])) {

    function soma($n){
        $r = 0;
        for($s = 0; $s <= $n; $s++){
            $r += $s;
        }
        return $r;
    }  

    $n = $_GET["n"];
    $resultado = soma($n);

    echo "<h2>Resultado da soma de 0 até $n:</h2>";
    echo $resultado;
} else {
    echo "Nenhum número foi informado.";
}
?>
