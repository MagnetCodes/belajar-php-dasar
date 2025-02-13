<?php

function sayHello()
{
    echo "Hello Function" . PHP_EOL;
}

sayHello();
sayHello();

// comtoh lain
$buat = true;

if ($buat) {
    function hi()
    {
        echo "Hei Bro" . PHP_EOL;
    }
}

hi();
hi();
