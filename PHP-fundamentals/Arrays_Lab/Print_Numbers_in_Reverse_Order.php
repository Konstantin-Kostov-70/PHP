<?php
$num = intval(readline());
$arr = [];

for ($i = 0; $i < $num; $i++) {
    $arr[$i] = intval(readline());
}

for ($i = $num - 1; $i >= 0; $i--) {
    echo $arr[$i]. " ";
}
