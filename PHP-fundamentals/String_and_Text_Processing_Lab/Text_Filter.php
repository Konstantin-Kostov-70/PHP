<?php

$words = explode(", ", readline());
$text = readline();

foreach ($words as $word) {
    $asterisk = str_repeat('*', strlen($word));
    $text = str_replace($word, $asterisk, $text);
}

echo $text;


