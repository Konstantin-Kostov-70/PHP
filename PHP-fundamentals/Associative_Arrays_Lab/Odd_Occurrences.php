<?php

$courses = explode(' ',readline());
$result = [];

foreach ($courses as $course) {
    $course = strtolower($course);
    if (!key_exists($course, $result)) {
        $result[$course] = 0;
    }
    $result[$course]++;
}

foreach ($result as $k => $v) {
    if ($v % 2 !== 0) {
        echo $k.' ';
    }
}
