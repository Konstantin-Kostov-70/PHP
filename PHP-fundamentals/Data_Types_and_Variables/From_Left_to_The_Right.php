<?php

$num = intval(readline());

for ($i = 0; $i < $num; $i++) {
    $line = explode(' ', readline());
    $left = $line[0];
    $right = $line[1];
    $currentSum = 0;

    if (intval($left) > intval($right)) {

        for ($j = 0; $j < strlen($left); $j++) {
            $currentSum += intval($left[$j]);
        }
    } else {
        for ($j = 0; $j < strlen($right); $j++) {
            $currentSum += intval($right[$j]);
        }
    }
    echo "$currentSum\n";
}
