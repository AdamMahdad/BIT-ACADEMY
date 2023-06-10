<?php

$a = readline('how many blocks are there ');
$b = 0;

while ($b < $a) {
    $b++;
    $a -= $b;
}

echo $b;

?>