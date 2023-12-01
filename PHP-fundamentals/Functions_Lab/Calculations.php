<?php
$operator = readline();
$num1 = intval(readline());
$num2 = intval(readline());

function calculator($opp, $n1, $n2): void
{
    $result = '';
    if ($opp == 'add') {
        $result = $n1 + $n2;
    } elseif ($opp == 'subtract') {
        $result = $n1 - $n2;
    } elseif ($opp == 'multiply') {
        $result = $n1 * $n2;
    } elseif ($opp == 'divide') {
        $result = $n1 / $n2;
    }
    echo $result;
}

calculator($operator, $num1, $num2);
