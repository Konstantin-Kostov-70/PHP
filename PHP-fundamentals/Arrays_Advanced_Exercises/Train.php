<?php

$train = array_map('intval', explode(' ', readline()));
$capacity = intval(readline());

$line = readline();
$people = [];

while ($line != 'end') {
    $line = explode(' ', $line);
    if ($line[0] == 'Add') {
        $wagon = intval($line[1]);
        $train[] = $wagon;
    } else {
        $people[] = intval($line[0]);
    }
    $line = readline();
}

for($i = 0; $i < count($train); $i++) {
    if ($people[0] + $train[$i] <= $capacity) {
        $p = array_shift($people);
        $train[$i] += $p;
        $i = -1;
    }
    if (count($people ) <= 0) {
        break;
    }
}

echo implode(' ', $train);


