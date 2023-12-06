<?php

$chars = explode(' ', readline());

foreach ($chars as $char) {
    $count = strlen($char);
    echo str_repeat($char, $count);
}
