<?php
$arr1 = explode(' ', readline());
$arr2 = explode(' ', readline());

$common = array_intersect($arr2, $arr1);

echo implode(' ', $common);


