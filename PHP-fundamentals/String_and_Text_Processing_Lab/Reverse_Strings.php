<?php

$string = readline();

while ($string !== 'end') {
    echo $string." = ". strrev($string).PHP_EOL;
    $string = readline();
}


