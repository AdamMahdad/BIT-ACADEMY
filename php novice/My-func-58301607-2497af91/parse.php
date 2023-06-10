<?php

function parseToInteger($value) 
{
    if (is_numeric($value) == false) {
        exit("Input moet een valide getal zijn") . PHP_EOL;
    }
    $output = (int)$value;
    return $output . PHP_EOL;
}


echo parseToInteger(10) . PHP_EOL;
echo parseToInteger("101") . PHP_EOL;
echo parseToInteger("Hallo wereld!") . PHP_EOL;

?>
