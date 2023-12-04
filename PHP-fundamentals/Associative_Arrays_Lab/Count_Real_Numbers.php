<?php

$arrNumbers = explode(' ', readline());

$result = [];

foreach ($arrNumbers as $num) {
    if (!key_exists($num, $result)) {
        $result[$num] = 0;
    }
    $result[$num]++;
}
ksort($result);

foreach ($result as $k => $v) {
    echo $k.' -> '.$v.PHP_EOL;
}