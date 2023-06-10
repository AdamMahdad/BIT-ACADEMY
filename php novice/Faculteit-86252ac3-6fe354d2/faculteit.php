<?php

echo "van welk getal wil je de faculteit weten?" . PHP_EOL;

$x = readline("");
$y = 1;

for ($i = 1; $i <= $x; $i++) {   
    {$y = $y * $i ;}
     echo "faculteit van $x is $y"; 
    }

?>