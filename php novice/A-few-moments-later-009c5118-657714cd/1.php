<?php

$totalseconds = 0;

if (is_num) {
    echo "geen getallen";
    exit;
}

for ($i = 1; $i < count($argv); $i++) { 
    $letter = substr($argv[$i], -1);

    switch ($letter) {
        case "s":
            $totalseconds += (int) $argv[$i];
            break;
        case "m":
            $totalseconds += (int) $argv[$i] * 60;
            break;
        case "u":
            $totalseconds += (int) $argv[$i] * 60 * 60;
            break;
        case "d":
            $totalseconds += (int) $argv[$i] * 60 * 60 * 24;
            break;
    }
}
echo ($totalseconds . " seconden" . PHP_EOL);