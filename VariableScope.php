<?php

$name = "Deden"; //global scope

function sayHello()
{
    global $name; //global keyword
    echo $name . PHP_EOL;

    echo $GLOBALS["name"] . PHP_EOL; //super global
}

sayHello();
