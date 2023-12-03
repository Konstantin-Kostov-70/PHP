<?php
$num = intval(readline());

function matrix($num): void
{
    for ($row = 0; $row < $num; $row++) {
        $result = array_fill(0, $num, strval($num));
        printf("%s\n", implode(' ', $result));
    }
}

matrix($num);
