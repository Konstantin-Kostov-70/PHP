<?php

$text = readline();

foreach (str_split($text) as $char) {
    $newChar = ord($char) + 3;
    echo chr($newChar);
}
