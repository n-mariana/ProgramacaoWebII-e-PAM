<?php 
if (isset($_GET["v"])){

    function media($v){
        // transforma a string em array
        $v = explode(",", $v);
        // converte cada item para número real
        $v = array_map('floatval', $v);
        // soma todos os elementos
        $s = array_sum($v);
        // calcula a média
        $m = $s / sizeof($v);
        return $m;
    }

    $entrada = $_GET["v"];
    echo "<h2>Números informados: $entrada</h2>";
    echo "<h2>Média: " . media($entrada) . "</h2>";
} else {
    echo "Nenhum número foi informado.";
}
?>
