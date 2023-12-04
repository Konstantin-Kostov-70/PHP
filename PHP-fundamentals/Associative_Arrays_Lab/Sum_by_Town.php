<?php

$input = explode(', ', readline());

$towns = [];

for ($i = 0; $i < count($input) - 1; $i += 2) {
    $town = $input[$i];
    $income = intval($input[$i + 1]);
    if (!key_exists($town, $towns)) {
        $towns[$town] = 0;
    }
    $towns[$town] += $income;
}

foreach ($towns as $k => $v) {
    echo "$k => $v".PHP_EOL;
}


