<?php
$num1 = intval(readline());
$num2 = intval(readline());
$num3 = intval(readline());

function add ($n1, $n2) {
    return $n1 + $n2;
}

$result = add($num1, $num2);

function subtract($n1, $n2) {
    return $n1 - $n2;
}

echo subtract($result, $num3);