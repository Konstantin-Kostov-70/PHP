<?php

$arr = array_map('intval',explode(" ", readline()));
$input = readline();

while ($input != 'end') {
    $command = explode(' ', $input);

    if ($command[0] == 'Contains') {
        $el = $command[1];
        $index = array_search($el, $arr);
        if ($index) {
            echo 'Yes'.PHP_EOL;
        } else {
            echo 'No such number'.PHP_EOL;
        }
    } elseif ($command[0] == 'Print' && $command[1] == 'even') {
        $even = [];
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] % 2 == 0) {
                $even[] = $arr[$i];
            }
        }
        echo implode(' ', $even).PHP_EOL;

    } elseif ($command[0] == 'Print' && $command[1] == 'odd') {
        $odd = [];
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] % 2 != 0) {
                $odd[] = $arr[$i];
            }
        }
        echo implode(' ', $odd).PHP_EOL;

    } elseif ($command[0] == 'Get' && $command[1] == 'sum') {
         echo array_sum($arr).PHP_EOL;

    } elseif ($command[0] == 'Filter') {
        $operator = $command[1];
        $el = $command[2];
        $elements = [];
        for ($i = 0; $i < count($arr); $i++) {
            if ($operator == '<' && $arr[$i] < $el) {
                $elements[] = $arr[$i];
            } elseif ($operator == '<=' && $arr[$i] <= $el) {
                $elements[] = $arr[$i];
            } elseif ($operator == '>' && $arr[$i] > $el) {
                $elements[] = $arr[$i];
            } elseif ($operator == '>=' && $arr[$i] >= $el) {
                $elements[] = $arr[$i];
            }
        }
        echo implode(' ', $elements).PHP_EOL;
    }
    $input = readline();
}