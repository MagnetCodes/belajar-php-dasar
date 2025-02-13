<?php

function sayHello($name)
{
    echo "Hallo $name" . PHP_EOL;
}

sayHello("Deden");
sayHello("Iboy");

// default function argument
function hi($name = "Unknown")
{
    echo "Hallo $name" . PHP_EOL;
}

hi();
hi("Iboy");

// default argument harus di letakkan dipaling akhir
function helo($first_name, $last_name = "Unknown")
{
    echo "Hallo $first_name $last_name" . PHP_EOL;
}

helo("deden");
helo("sutisna", "santosa");

// mengubah tipe data di function
function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

sum(100, 100);
sum("100", "100");
sum(true, false);
// sum([], []);

//function variable argument list
function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(",", $values) . " = $total" . PHP_EOL;
}
// contoh jika sudah ada array
$values = [1, 2, 3, 4, 5];

sumAll(1, 2, 3, 4, 5);
sumAll(...$values);
