<?php
$kind = readline();
$karats = readline();
$golds = [];

while (true) {
    if (!key_exists($kind, $golds)) {
        $golds[$kind] = '';
    }
    $golds[$kind] = $karats;

    $kind = readline();
    if($kind == 'stop') {
        break;
    }
    $karats = readline();
}

foreach ($golds as $k => $v) {
    echo "$k -> $v"."K".PHP_EOL;
}
