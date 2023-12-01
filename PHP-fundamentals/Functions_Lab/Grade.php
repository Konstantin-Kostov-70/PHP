<?php
printGrade(floatval(readline()));
function printGrade($grade): void
{
    if ($grade >= 2 && $grade <= 2.99) {
        echo 'Fail';
    } elseif ($grade <= 3.49) {
        echo 'Poor';
    } elseif ($grade <= 4.49) {
        echo 'Good';
    } elseif ($grade <= 5.49) {
        echo 'Very Good';
    } elseif ($grade <= 6) {
        echo 'Excellent';
    }
}
