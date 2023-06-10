<?php

$arr = array();
echo "Hoeveel vrienden zal ik vragen om hun droom?" . PHP_EOL;
$vrienden = readline();
if (is_numeric($vrienden)) {
    for ($i = 0; $i < ($vrienden); $i++) {
        echo "Wat is je naam?" . PHP_EOL;
        $naam = readline();
        echo "Hoeveel dromen ga je opgeven?" . PHP_EOL;
        $dromen = readline();
        $arr2 = array();
        if (is_numeric($dromen)) {
            for ($j = 0; $j < ($dromen); $j++) {
                echo "Wat is je droom?" . PHP_EOL;
                $droominput = readline();
                $arr2[] = $droominput;
            }
            $arr[$naam] = $arr2;
        } else {
            echo "Dat is geen aantal... bruh" . PHP_EOL;
            exit;
        }
    }
    foreach ($arr as $naam => $inhoud) {
        foreach ($inhoud as $value => $arr3) {
             echo "$naam heeft dit als droom : $arr3" . PHP_EOL;
        } 
    } 
} else {
        echo "geen getal" . PHP_EOL;
        exit;
}

?>