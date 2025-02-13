<?php

function sum(int $first, int $second): int
{
    return $first + $second;
}

$result = sum(10, 10);
var_dump($result);

$result = sum(100, 100);
var_dump($result);

// contoh 2
function getFinalValue(int $value): string
{
    if ($value >= 80) {
        return "Nilai = A";
    } else if ($value >= 70) {
        return "Nilai = B";
    } else if ($value >= 60) {
        return " Nilai = C ";
    } else if ($value >= 50) {
        return "Nilai = D";
    } else {
        return "Nilai = E";
    }
    // tidak akan dieksekusi
    echo "Ups" . PHP_EOL;
}

$score = getFinalValue(90);
var_dump($score);
$score = getFinalValue(30);
var_dump($score);
