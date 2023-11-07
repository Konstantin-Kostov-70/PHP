<?php
$count = intval(readline());
$costumer = readline();
$day = readline();
$price = 0;

if ($costumer === "Students") {
   if ($day === 'Friday') {
       $price = 8.45;
   }
   elseif ($day === 'Saturday') {
       $price = 9.80;
   }
   else {
       $price = 10.46;
   }
} elseif ($costumer === 'Business') {
    if ($day === 'Friday') {
        $price = 10.90;
    }
    elseif ($day === 'Saturday') {
        $price = 15.60;
    }
    else {
        $price = 16;
    }
} else  {
    if ($day === 'Friday') {
        $price = 15;
    }
    elseif ($day === 'Saturday') {
        $price = 20;
    }
    else {
        $price = 22.50;
    }
}

$total = $count * $price;

if ($costumer === 'Students' && $count >= 30) {
    $total *= 0.85;
} elseif ($costumer === 'Business' && $count >= 100) {
    $total = ($count - 10) * $price;
} elseif ($costumer === 'Regular' && ($count >= 10 && $count <= 20)) {
    $total *= 0.95;
}

printf( "Total price: %.2f", $total);