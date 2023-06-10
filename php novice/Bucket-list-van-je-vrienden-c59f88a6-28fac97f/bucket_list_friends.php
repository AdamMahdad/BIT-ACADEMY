<?php

echo "hoeveel vrienden zal ik vragen om hun droom? " . PHP_EOL;
$x = readline("");
if (!is_numeric($x)) {
    exit("$x is geen getal, probeer het opnieuw");
}

for ($j = 1; $j <= $x; $j++) {
    echo "wat is jouw naam? " . PHP_EOL;
    $naam = readline("");

    echo "wat is jouw droom? " . PHP_EOL;
    $droom = readline("");
    
    $persoon[$naam] = $droom;
}

foreach ($persoon as $naam => $droom) {
    echo $naam ," heeft dit als droom: ",$droom . PHP_EOL;
}