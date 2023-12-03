<?php

$arr1 = explode(' ', readline());
$arr2 = explode(' ', readline());
$merged = [];
$count = 0;
$reminded = [];

if (count($arr1) < count($arr2)) {
   $count = count($arr1);
   $reminded = array_splice($arr2,count($arr1) , count($arr2) - count($arr1));

} elseif(count($arr1) > count($arr2)) {
    $count = count($arr2);
    $reminded = array_splice($arr1,count($arr2) , count($arr1) - count($arr2));
} else {
    $count = count($arr1);
}

for ($i = 0; $i < $count; $i++) {
    $merged[] = $arr1[$i];
    $merged[] = $arr2[$i];
}

echo implode(' ', array_merge($merged, $reminded));


