<?php
$string = readline();
function middleChar($str): string
{
    $result = '';
    $index = strlen($str) / 2;
    if (strlen($str) % 2 == 0) {
        $result .= $str[$index - 1].$str[$index];
    } else {

        $result = $str[intval($index)];
    }
    return $result;
}

echo middleChar($string);
