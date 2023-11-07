<?php
$sum = 0;
$price = 0;

while (true) {
    $input = readline();
    $coin = floatval($input);
    if ($input === 'Start') {
        break;
    }
    if ($coin === 0.1 || $coin === 0.2 || $coin === 0.5 || $coin === 1.0 || $coin === 2.0) {
        $sum += $coin;
    }
    else {
        echo "Cannot accept $coin\n";
    }
}

while (true) {
    $product = readline();
    if ($product === 'End') {
        break;
    }
    switch ($product) {
        case 'Nuts': $price = 2; break;
        case 'Water': $price = 0.7; break;
        case 'Crisps': $price = 1.5; break;
        case 'Soda': $price = 0.8; break;
        case 'Coke': $price = 1; break;
        default : echo 'Invalid product';
    }
    if ($sum - $price < 0) {
        echo "Sorry, not enough money\n";
    } else {
        $sum -= $price;
    }
}
printf("Change: %.2f.", $sum);
