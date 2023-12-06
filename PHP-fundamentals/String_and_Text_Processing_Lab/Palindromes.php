<?php

$input = preg_split("/[ ,.?!]/", readline(),
    null, PREG_SPLIT_NO_EMPTY);

$palindromes = array_filter($input, fn($word) => $word == strrev($word));

$uniqueArr = array_unique($palindromes);
natcasesort($uniqueArr);

echo implode(', ', $uniqueArr);
