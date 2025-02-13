<?php 

$a = [
    "first_name" => "Sutisna",
];

$b = [
    "first_name" => "Sutisna",
    "last_name" => "Santosa",
];

$full = $a + $b;
var_dump($full);

$c = [
    "first_name" => "Sutisna",
    "last_name" => "Santosa",
];

$d = [
    "last_name" => "Santosa",
    "first_name" => "Sutisna"
];

var_dump($c == $d);
var_dump($c === $d);
var_dump($c != $d);
var_dump($c !== $d);

?>