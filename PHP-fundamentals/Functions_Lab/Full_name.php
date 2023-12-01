<?php

$firstName = readline();
$lastName = readline();

function fullName($first, $last): string
{
    return $first . ' ' . $last;
}

echo fullName($firstName, $lastName);
