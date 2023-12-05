<?php
$num = intval(readline());
$arr = [];

for($i = 0; $i < $num; $i++) {
    $name = readline();
    $grade = floatval(readline());

    if (!key_exists($name, $arr)) {
        $arr[$name] = [];
    }
    $arr[$name][] = $grade;
}

$newArr = [];
foreach ($arr as $k => $v) {
    $average = array_sum($v) / count($v);
    if ($average >= 4.50) {
        $newArr[$k] = number_format($average,2,'.', '');
    }
}
arsort($newArr);

foreach ($newArr as $k => $v) {
    echo "$k -> $v".PHP_EOL;
}