<?php

$num = intval(readline());

$bestBall = 0;
$bestSnow = 0;
$bestTime = 0;
$bestQuality = 0;

for ($i = 0; $i < $num; $i ++) {
    $snowballSnow = intval(readline());
    $snowballTime = intval(readline());
    $snowballQuality = intval(readline());
    $currentBall = ($snowballSnow / $snowballTime) ** $snowballQuality;

    if ($currentBall > $bestBall) {
        $bestBall = $currentBall;
        $bestSnow = $snowballSnow;
        $bestTime = $snowballTime;
        $bestQuality = $snowballQuality;
    }
}

echo "$bestSnow : $bestTime = $bestBall ($bestQuality)";
