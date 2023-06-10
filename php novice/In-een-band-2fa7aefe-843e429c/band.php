<?php

$array = array('citizen of glass' => 4.5, 'night kost' => 9, "New Eyes kost" => 5, "Strange Trails kost" => 10);

$totaal = 0;
$gemiddelde = 0;
echo "het albumoverzicht:" . PHP_EOL;
foreach ($array as $album => $prijs) {
    echo "$album $prijs" . PHP_EOL;
    $totaal = $totaal + $prijs;
}
$gemiddelde = $totaal / count($array);
echo "De totaalbedrag van alle albums is $totaal kost" . PHP_EOL;
echo "De gemiddelde prijs van alle albums is $gemiddelde" . PHP_EOL;

?>