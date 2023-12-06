<?php

$sub = readline();
$text = readline();

while (str_contains($text, $sub)){
    $text = str_replace($sub, '******', $text);
}

echo $text;
