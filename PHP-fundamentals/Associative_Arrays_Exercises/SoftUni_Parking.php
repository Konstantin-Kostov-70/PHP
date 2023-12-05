<?php
$num = intval(readline());
$dataBase = [];

for ($i = 0; $i < $num; $i++) {
    $input = explode(' ', readline());
    $command = $input[0];
    $name = $input[1];

    if ($command == 'register') {
        $plate = $input[2];
        if(key_exists($name, $dataBase)) {
            echo "ERROR: already registered with plate number $plate".PHP_EOL;
        } else {
            $dataBase[$name] = $plate;
            echo "$name registered $plate successfully".PHP_EOL;
        }
    } else {
        if (key_exists($name, $dataBase)) {
            unset($dataBase[$name]);
            echo "$name unregistered successfully".PHP_EOL;
        } else {
            echo "ERROR: user $name not found".PHP_EOL;
        }
    }
}

foreach ($dataBase as $k => $v) {
    echo "$k => $v".PHP_EOL;
}