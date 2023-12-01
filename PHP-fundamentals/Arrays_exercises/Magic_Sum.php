<?php
$arr = explode(' ', readline());
$num = intval(readline());
$count = count($arr);

for ($i = 0; $i < $count; $i++) {
    for ($j = $i + 1; $j < $count; $j++) {
        if (intval($arr[$i]) + intval($arr[$j]) == $num) {
            echo "$arr[$i] $arr[$j]\n";
        }
    }
}

