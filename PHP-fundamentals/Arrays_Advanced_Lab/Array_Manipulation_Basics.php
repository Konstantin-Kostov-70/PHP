<?php

$arr = explode(" ", readline());
$input = readline();

while ($input != 'end') {
    $command = explode(" ", $input);

    if ($command[0] == 'Add') {
        $el = $command[1];
       $arr[] = $el;

    } elseif ($command[0] == 'Remove') {
        $el = $command[1];
        $index = array_search($el, $arr);
        unset($arr[$index]);

    } elseif ($command[0] == 'RemoveAt') {
        $index = $command[1];
        array_splice($arr, $index, 1);

    } elseif ($command[0] == 'Insert') {
        $el = $command[1];
        $index = $command[2];
        array_splice($arr, $index, 0, $el);
    }

    $input = readline();
}

echo implode(' ', $arr);