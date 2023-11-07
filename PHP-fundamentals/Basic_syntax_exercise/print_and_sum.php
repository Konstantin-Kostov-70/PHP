<?php

$num1 = intval(readline());
$num2 = intval(readline());
$sum = 0;

for ($i = $num1; $i <= $num2; $i ++) {
   $sum += $i;
   echo "$i ";
}

echo "\nSum: $sum";
