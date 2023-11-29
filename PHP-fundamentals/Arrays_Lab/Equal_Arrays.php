<?php
$arr1 = array_map('intval',explode(' ', readline()));
$arr2 = array_map('intval',explode(' ', readline()));

$is_equal = true;

for ($i = 0; $i < count($arr1); $i++) {
    if ($arr1[$i] != $arr2[$i]) {
        $is_equal = false;
        echo "Arrays are not identical. Found difference at $i index";
        break;
    }
}

if ($is_equal) {
    echo "Arrays are identical. Sum: ", array_sum($arr1);
}
