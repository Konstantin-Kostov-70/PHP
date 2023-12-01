<?php
$arr = explode(' ', readline());
$count = count($arr);
$top = [];

for ($i = 0; $i < $count; $i++) {
    $is_top = true;
    for ($j = $i + 1; $j < $count; $j++) {
        if ($arr[$i] <= $arr[$j]) {
            $is_top = false;
            break;
        }
    }
    if ($is_top) {
        $top[] = $arr[$i];
    }
}

echo implode(' ', $top);
