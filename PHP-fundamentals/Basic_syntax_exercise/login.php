<?php

$user = readline();
$pass = readline();
$counter = 1;

while (true) {
    if ($user === strrev($pass)) {
        echo "User $user logged in.";
        break;
    }
    if ($counter === 4) {
        echo "User $user blocked!";
        break;
    }
    $counter ++;
    $pass = readline();
}