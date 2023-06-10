<?php

echo "Hoeveel activiteiten wil je toevoegen?" . PHP_EOL;
$y = readline("");

if (!is_numeric($y)) {
    exit("$y Is geen getal, probeer het opnieuw");
}

for ($x = 0; $x < $y; $x++) {
    echo "Wat wil je toevoegen aan jouw bucket list?" . PHP_EOL;
    $a = readline();
    $array = array($a);
}

echo "Op jouw bucket list staat:" . PHP_EOL;
for ($i = 0; $i <= 2; $i++) {
    echo $array[$i] . PHP_EOL;
}

?>