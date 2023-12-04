<?php

$arr = array_map('intval',explode(' ', readline()));

$line = readline();
//$odd = [];
//$even = [];

while ($line != 'Odd' && $line != 'Even') {
    $line = explode(' ', $line);

    if ($line[0] == 'Delete') {
        $el = $line[1];
        while (in_array($el, $arr)) {
            $index = array_search($el, $arr);
            array_splice($arr, $index, 1);
        }

    } elseif ($line[0] == 'Insert') {
        $el = intval($line[1]);
        $index = $line[2];
        array_splice($arr, $index, 0, $el);
    }
    $line = readline();
}

$odd = array_filter($arr, fn($el) => $el % 2 != 0);
$even = array_filter($arr, fn($el) => $el % 2 == 0);


if ($line == 'Odd') {
    echo implode(' ', $odd);
} else {
    echo implode(' ', $even);
}




