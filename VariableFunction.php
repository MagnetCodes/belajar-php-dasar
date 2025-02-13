<?php

function foo()
{
    echo "foo" . PHP_EOL;
}

function bar()
{
    echo "bar" . PHP_EOL;
}

$functionYangAkanDipanggil = "foo";
$functionYangAkanDipanggil();

$functionYangAkanDipanggil = "bar";
$functionYangAkanDipanggil();

// penggunaan variable function
function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name): string
{
    return "Sample $name";
}

sayHello("Deden", "sampleFunction");
sayHello("Deden", "strtoupper");
sayHello("Deden", "strtolower");
