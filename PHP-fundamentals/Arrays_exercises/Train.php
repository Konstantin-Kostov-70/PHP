<?php

$num = intval(readline());
$arr = [];

for ($i = 0; $i < $num; $i++) {
    $arr[$i] = intval(readline());
}

echo implode(' ', $arr).PHP_EOL;
echo array_sum($arr);