<?php
$var1 = 2000;
$var2 = 23;

$var3 = $var1 + $var2;

//interpolation string is with double quotes
// \n new line
echo "Hello I am PHP Interpreter $var3 \n";
echo "Please enter your username:\n";
$name = readline();
echo "Tanks $name \n";
echo "How old are you ?\n";

//define type of input. In this case is integer
$age = intval(readline());

$afterAge = 7;
$age += $afterAge;
echo "After $afterAge years, You will be $age years old. \n";
echo "Which grade have you of JS education. \n";
$grade = intval(readline());
$floatGreat = 5.57865;
// formatting mixed values, in this case is string, decimal, float
printf('%s, your grade is full %d or %.2f ?', $name, $grade, $floatGreat);







