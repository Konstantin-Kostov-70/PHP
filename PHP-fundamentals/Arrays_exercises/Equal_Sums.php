<?php
$arr = explode(' ', readline());
$count = count($arr);

$left = [];
$right = [];
$is_equal = false;

for ($i = 0; $i < $count; $i++) {
    $left = array_slice($arr, 0, $i );
    $right = array_slice($arr, $i + 1, $count - $i);
    if (array_sum($left) == array_sum($right)) {
        echo $i;
        $is_equal = true;
    }
}

if(!$is_equal) {
    echo 'no';
}