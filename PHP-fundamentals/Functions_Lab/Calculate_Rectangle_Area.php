<?php

$height = intval(readline());
$width = intval(readline());

function calArea($h, $w): float|int
{
    return $h * $w;
}

echo calArea($height, $width);