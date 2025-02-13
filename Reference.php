<?php

$name = "Deden";

$otherName = &$name; //keyword reference
$otherName = "Budi";

echo "$name" . PHP_EOL;

function increment(int &$value) //keyword reference
{
    $value++;
}

$counter = 1;
increment($counter);

echo $counter . PHP_EOL;

function &getvalue()
{
    static $value = 100;
    return $value;
}

$a = &getvalue();
$a = 200;

$b = &getvalue();
echo $b . PHP_EOL;
