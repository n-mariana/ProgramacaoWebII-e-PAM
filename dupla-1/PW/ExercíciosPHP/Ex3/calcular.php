<?php 

$n1 = $_GET["n1"];
$n2 = $_GET["n2"];
$op = $_GET["op"];

if($op == "+") {
    $r = $n1 + $n2;
    echo "O resultado será: " . $r;
}
else if($op == "-") {
    $r = $n1 - $n2;
    echo "O resultado será: " . $r;
}

else if($op == "*") {
    $r = $n1 * $n2;
    echo "O resultado será: " . $r;
}
else if($op == "/") {
    $r = $n1 / $n2;
    echo "O resultado será: " . $r;
} 
else{
    echo "Opção Inválida";
}  
?>