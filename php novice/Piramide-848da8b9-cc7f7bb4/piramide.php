<?php

$n = readline("hoeveel stapels wil je hebben? ");
$y = "*";

for ($i = 0; $i < $n; $i++) {
    echo $y . PHP_EOL;
    $y .= "*";
}

?>