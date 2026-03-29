<?php
$n1 = $_GET["n1"];
$n2 = $_GET["n2"];
$n3 = $_GET["n3"];
$n4 = $_GET["n4"];
$n5 = $_GET["n5"];
$r1 = 1;
$r2 = 1;
$r3 = 1;
$r4 = 1;
$r5 = 1;

for($f = $n1; $f >= 1; $f--){
    $r1 *= $f;
}
for($f = $n2; $f >= 1; $f--){
    $r2 *= $f;
}
for($f = $n3; $f >= 1; $f--){
    $r3 *= $f;
}
for($f = $n4; $f >= 1; $f--){
    $r4 *= $f;
}
for($f = $n5; $f >= 1; $f--){
    $r5 *= $f;
}

$s = $r1+$r2+$r3+$r4+$r5;
echo "resultado: " . $s;
?>