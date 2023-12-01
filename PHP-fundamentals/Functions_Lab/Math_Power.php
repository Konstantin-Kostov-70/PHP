<?php
$num = intval(readline());
$power = intval(readline());

function mathPower($n, $p) {
    $result = 1;
    for($i = 0; $i < $p; $i++) {
        $result *= $n;
    }
    return $result;
}

echo mathPower($num, $power);


