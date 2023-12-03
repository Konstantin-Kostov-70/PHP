<?php
$pass = readline();

function lenValidator($str): bool
{
    $length = strlen($str);

    if ($length < 6 || $length > 10) {
        return false;
    }
    return true;
}

function alphaNumValidator($str): bool
{
    $chars = str_split($str);
    foreach ($chars as $char) {
        if (!ctype_alnum($char)) {
            return false;
        }
    }
    return true;
}

function lestTwoDigitsValidator($str): bool
{
    $chars = str_split($str);
    $digitCounter = 0;
    foreach ($chars as $char) {
        if (ctype_digit($char)) {
            $digitCounter++;
        }
    }
    if ($digitCounter < 2) {
        return false;
    }
    return true;
}


if (!lenValidator($pass)) {
    echo "Password must be between 6 and 10 characters\n";
}
if (!alphaNumValidator($pass)) {
    echo "Password must consist only of letters and digits\n";
}
if (!lestTwoDigitsValidator($pass)) {
    echo "Password must have at least 2 digits\n";
}

if (lenValidator($pass) && alphaNumValidator($pass) && lestTwoDigitsValidator($pass)) {
    echo "Password is valid";
}






