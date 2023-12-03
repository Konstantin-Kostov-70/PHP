<?php

function smallestElement($n1, $n2, $n3) {
    $small = 0;
    if ($n1 < $n2 && $n1 < $n3) {
        $small = $n1;
    } elseif ($n2 < $n1 && $n2 < $n3) {
        $small = $n2;
    } elseif ($n3 < $n1 && $n3 < $n2) {
        $small = $n3;
    }

    return $small;
}

$num1 = intval(readline());
$num2 = intval(readline());
$num3 = intval(readline());

echo smallestElement($num1, $num2, $num3);