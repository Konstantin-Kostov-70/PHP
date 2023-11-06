<?php
$a = 5;
$b = 10;

if ($a > $b) {
    echo "$a is bigger then $b is true ".PHP_EOL;
}
else {
    echo "$a is bigger then $b is false \n";
}
//the same syntax
echo ($a > $b) ? "$a is bigger then $b is true \n" : "$a is bigger then $b is false\n";

// *****************************************************************************

//switch conditional statement
echo "Choose one number as day of week \n";
$day = intval(readline());

switch ($day) {
    case 1 : echo "Monday is your choice.\n";break;
    case 2 : echo "Tuesday is your choice.\n";break;
    case 3 : echo "Wednesday is your choice.\n";break;
    case 4 : echo "Thursday is your choice.\n";break;
    case 5 : echo "Friday is your choice.\n";break;
    case 6 : echo "Saturday is your choice.\n";break;
    case 7 : echo "Sunday is your choice.\n";break;
    default: echo "Wrong number!\n";break;
}
// ****************************************************************************************
echo "***************************************".PHP_EOL;
//while loop

$num = 5;

while ($num < 10) {
    $num ++;
    echo $num . PHP_EOL;
}
//****************************************************************************

echo "***************************************".PHP_EOL;
//for loop

for ($i = 1; $i <= 5; $i ++) {
    echo $i . PHP_EOL;
}