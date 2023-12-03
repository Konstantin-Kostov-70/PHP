<?php

$input = array_map('intval', explode(' ', readline()));

for ($i = 0; $i < count($input) - 1; $i++) {
    if ($input[$i] == $input[$i + 1]) {
        $element = $input[$i] + $input[$i + 1];
        $input[$i] = $element;
        array_splice($input, $i + 1, 1);
        $i = -1;
// with $i = -1 we set $i to 0 again because the next iteration $i++ add 1
// -1 + 1 = 0 and $i will be O again ,and we start iter from beginning of the array
    }
}

echo implode(' ', $input);