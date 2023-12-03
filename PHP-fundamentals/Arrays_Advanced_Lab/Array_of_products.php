<?php

$num = intval(readline());
$arr = [];

for ($i = 0; $i < $num ; $i++) {
    $arr[] = readline();
}
sort($arr);

for ($i = 0; $i < count($arr) ; $i++) {
   echo $i + 1 . '.' . $arr[$i].PHP_EOL;
}
