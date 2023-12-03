<?php
$char1 = readline();
$char2 = readline();

function chars($ch1, $ch2): string
{
    $result = '';
    for ($i = ord($ch1) + 1; $i < ord($ch2); $i++) {
        $result .= chr($i).' ';
    }
    return $result;
}

echo chars($char1, $char2);

