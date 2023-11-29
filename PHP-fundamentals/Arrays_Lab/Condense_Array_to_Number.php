<?php
$nums = array_map('intval', explode(' ', readline()));

while (count($nums) > 1) {
    $current_arr = [];
    for ($i = 0; $i < count($nums) - 1 ; $i++) {
        $current_arr[$i] = $nums[$i] + $nums[$i + 1];
    }
    $nums = $current_arr;
}

echo $nums[0];
