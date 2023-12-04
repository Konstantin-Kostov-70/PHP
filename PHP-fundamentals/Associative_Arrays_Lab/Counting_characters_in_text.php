<?php

$text = readline();
$arr = [];

for ($i = 0; $i < strlen($text); $i++) {
    if (!key_exists($text[$i], $arr)) {
        $arr[$text[$i]] = 0;
    }
    $arr[$text[$i]]++;
}

foreach ($arr as $k => $v) {
    echo $k.' -> '.$v.PHP_EOL;
}
