<?php
$num = intval(readline());
$arr1 = [];
$arr2 = [];

for ($i = 0; $i < $num; $i++) {
    $current_arr = explode(' ',readline());
    if ($i % 2 == 0) {
        $arr1[$i] = $current_arr[0];
        $arr2[$i] = $current_arr[1];
    } else {
        $arr1[$i] = $current_arr[1];
        $arr2[$i] = $current_arr[0];
    }
}

echo implode(' ', $arr1).PHP_EOL;
echo implode(' ', $arr2);