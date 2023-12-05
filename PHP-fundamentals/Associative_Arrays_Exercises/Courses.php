<?php

$input = readline();
$courses = [];

while ($input != 'end') {
    [$course, $name] = explode(' : ', $input);
    if (!key_exists($course, $courses)) {
        $courses[$course] = [];
    }
    $courses[$course][] = $name;
    $input = readline();
}

arsort($courses);

foreach ($courses as $k => $v) {
    sort($v);
    echo "$k : ".count($v).PHP_EOL;
    foreach ($v as $name) {
        echo "-- $name".PHP_EOL;
    }
}