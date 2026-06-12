<?php 
if(isset($_GET["n1"], $_GET["n2"], $_GET["n3"], $_GET["n4"], $_GET["n5"], $_GET["n6"], $_GET["n7"], $_GET["n8"])){

    $numeros = [
        $_GET["n1"], $_GET["n2"], $_GET["n3"], $_GET["n4"],
        $_GET["n5"], $_GET["n6"], $_GET["n7"], $_GET["n8"]
    ];

    $positivos = [];
    $negativos = [];

    foreach($numeros as $num){
        if($num > 0){
            $positivos[] = $num;
        } elseif($num < 0){
            $negativos[] = $num;
        }
    }

    echo "<h2>Positivos:</h2>";
    echo implode(", ", $positivos);

    echo "<h2>Negativos:</h2>";
    echo implode(", ", $negativos);
} else {
    echo "Nenhum número foi informado.";
}
?>
