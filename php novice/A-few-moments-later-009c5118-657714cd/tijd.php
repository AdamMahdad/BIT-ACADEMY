<?php

$totaalTime = 0;
if (count($argv) == 1) {
    exit("FOUT!");
}

foreach ($argv as $index => $item) {
//om dat te doen hebben we de index van de array nodig die kunnen we zo krijgen...
    if ($index == 0) {
        continue;
    }
    var_dump($item);
        $timeFormat = substr($item, -1, 1);
        $number = (int)$item;
    switch ($timeFormat) {
        case "d":
            $totaalTime += $number * 86400;
            break;
        case "u":
            $totaalTime += $number * 3600;
            break;
        case "m":
            $totaalTime += $number * 60;
            break;
        case "s":
            $totaalTime += $number;
            break;
        default:
            echo "Geen tijd meegeven";          
    }
}
echo "$totaalTime seconden";

?>