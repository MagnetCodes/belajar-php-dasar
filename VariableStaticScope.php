<?php

function increment()
{
    static $counter = 1; //static function
    echo "Counter = $counter" . PHP_EOL;

    $counter++;
}

increment();
increment();
increment();
