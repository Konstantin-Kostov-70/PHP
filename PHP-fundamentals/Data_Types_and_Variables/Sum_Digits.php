<?php
$num = readline();
$sum = 0;

for ($i = 0; $i < strlen($num); $i ++) {
    $sum += intval($num[$i]);
}

echo $sum;