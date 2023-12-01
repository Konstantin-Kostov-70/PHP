<?php

$arr = [1, 2, 3, 4];

$newArr = array_map(function ($el) {
   return $el * 5;
}, $arr);

var_dump($newArr);