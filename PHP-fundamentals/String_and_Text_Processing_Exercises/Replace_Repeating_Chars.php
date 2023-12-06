<?php

$input = readline();
$output = '';

$length = strlen($input);

for ($i = 0; $i < $length; $i++) {
    if ($i === 0 || $input[$i] !== $input[$i - 1]) {
        $output .= $input[$i];
    }
}

echo $output;

