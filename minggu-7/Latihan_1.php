<?php
function swap(&$a , &$b){
    $c = $a;
    $a = $b;
    $b = $c;
}
$a=10;
$b=5;
echo $a;
echo "</br>";
echo $b;
echo "</br>";
echo "Hasil Tukar";
echo "</br>";
swap($a, $b);
echo $a;
echo "</br>";
echo $b;
?>