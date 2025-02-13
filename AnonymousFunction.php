<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Deden");
$sayHello("Iboy");

// contoh 2
function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL;
}

sayGoodBye("Deden", function (string $name): string {
    return strtoupper($name);
});

$filterFunction = function (string $name): string {
    return strtoupper($name);
};

sayGoodBye("Deden", $filterFunction);

// menggunakan variable baru
$firstName = "Sutisna";
$lastName = "Santosa";

$sayHelloDeden = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloDeden();

$firstName = "Deden";
$lastName = "Iboy";
$sayHelloDeden();
