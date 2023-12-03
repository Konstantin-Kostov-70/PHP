<?php
$string = readline();
function vowels($str): int
{
    $counter = 0;
    $arr = ['a', 'e', 'o', 'u', 'i', 'w'];
    $chars = array_map('strtolower',str_split($str));

    foreach ($chars as $char) {
        if(in_array($char, $arr)) {
            $counter++;
        }
    }
    return $counter;
}

echo vowels($string);