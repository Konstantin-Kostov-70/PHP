<?php

$meters = intval(readline());
$kilometers = $meters / 1000;

$kilometers = number_format($kilometers, decimals: 2, decimal_separator: '.', thousands_separator: '');

echo $kilometers;