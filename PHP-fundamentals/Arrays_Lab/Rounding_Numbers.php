<?php

$nums = explode(' ', readline());
for ($i = 0; $i < count($nums); $i++) {
    $round_num = round(floatval($nums[$i]));
    echo "$nums[$i] => $round_num\n";
}
