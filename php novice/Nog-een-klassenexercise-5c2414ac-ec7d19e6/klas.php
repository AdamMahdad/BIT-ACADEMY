<?php

echo "wie zit er in de klas?" . PHP_EOL;

$naam = readline("");
$naam = explode(' ', $naam);

echo "de studenten in de klas zijn:" . PHP_EOL;

foreach ($naam as $persoon) {
    echo $persoon . PHP_EOL;
}

?>