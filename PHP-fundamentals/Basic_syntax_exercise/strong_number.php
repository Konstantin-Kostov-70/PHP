<?php
$num = readline();
$sum = 0;

for ($i = 0; $i < strlen($num); $i ++) {
    $d = intval($num[$i]);
    $factorial = 1;
    for ($j = $d; $j > 0; $j --) {

        $factorial *= $j;
    }
    $sum += $factorial;
}

if ($num == $sum) {
    echo 'yes';
} else {
    echo 'no';
}