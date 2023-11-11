<?php
$char = readline();
$newChar = strtoupper($char);

if ($char === $newChar) {
    echo 'upper-case';
} else {
    echo 'lower-case';
}