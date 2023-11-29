<?php

$nums = array_map('intval', explode(' ', readline()));
$even_sum = 0;
$odd_sum = 0;
foreach ($nums as $num) {
    if ($num % 2 == 0) {
        $even_sum += $num;
    } else {
        $odd_sum += $num;
    }
}
echo $even_sum - $odd_sum;
