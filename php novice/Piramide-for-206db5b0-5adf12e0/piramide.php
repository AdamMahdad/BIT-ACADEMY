<?php

echo "hoeveel stapels heb je nodig";

$a = readline('');
for ($i = 0; $i <= $a; $i++) {  
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }

    echo "" . PHP_EOL;
}
?>