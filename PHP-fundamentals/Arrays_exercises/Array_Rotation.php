<?php
$arr = explode(' ', readline());
$num = intval(readline());

for ($i = 0; $i < $num; $i++) {
    $current = array_shift($arr);
    $arr[] = $current;
//    $arr[] "pushed element in array in the last position same like code down"
//    array_push($arr, $current);
}

echo implode(' ', $arr);