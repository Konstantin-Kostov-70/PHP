<?php

$input = array_map('intval',explode(" ", readline()));

for ($i = 0; $i < count($input); $i++) {
    if ($input[$i] < 0) {
        array_splice($input, $i, 1);
        $i--;
    }
}

echo implode(' ', array_reverse($input));