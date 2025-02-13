<?php

function sayHello(string $name, callable $filter) //callback function
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Deden", "strtoupper");
sayHello("Deden", "strtolower");
sayHello("Iboy", function (string $name): string { //anonymous function
    return strtoupper($name);
});
sayHello("Santosa", fn($name) => strtoupper($name)); //arrow function
