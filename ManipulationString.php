<?php 

$name = "Sutisna Santosa";

echo "Name : " . $name . PHP_EOL;
echo "Values : " . 100 . PHP_EOL;

// konversi number dan sebaliknya
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"salah";
var_dump($valueInt);

$valueFloat = (float)"1.01";
var_dump($valueFloat);

// mengakses karakter distring
$a = "Deden";
echo $a[0] . PHP_EOL;
echo $a[1] . PHP_EOL;
echo $a[2] . PHP_EOL;
echo $a[3] . PHP_EOL;
echo $a[4] . PHP_EOL;

// variable parsing
$b = "Deden";
echo "Hello " . $b . ", Selamat Belajar PHP" . PHP_EOL; 
echo "Hello $b, Selamat Belajar PHP" . PHP_EOL; 

// curly brace
$var = "var";
echo "This is {$var}s" . PHP_EOL;

?>