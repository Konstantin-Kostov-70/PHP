<?php
$a = readline();
$b = readline();

echo "Before: \na = $a\nb = $b\n";

$currentA = $a;
$currentB = $b;

$a = $currentB;
$b = $currentA;

echo "\nAfter: \na = $a\nb = $b\n";
var_dump($a);