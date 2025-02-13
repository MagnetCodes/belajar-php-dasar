<?php

function createName()
{
    $name = "Deden"; //local scope
}

createName();
echo $name . PHP_EOL;
