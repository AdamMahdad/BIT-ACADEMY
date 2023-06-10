<?php

$goed = array();
$plaatsen = array(
    "Japan" => "Tokyo",
    "Mexico" => "Mexico City",
    "USA" => "Washington D.C.",
    "India" => "New Delhi",
    "Zuid-Korea" => "Seoul",
    "China" => "Peking",
    "Nigeria" => "Abuja",
    "Argentina" => "Buenos Aires",
    "Egypt" => "Cairo",
    "UK" => "London",
    "abdi zn moeder" => "kleine abdi"
);

foreach ($plaatsen as $land => $stad) {
       echo " welke hoofdstad heeft $land" . PHP_EOL;
       $input = readline(" ");
    if ($input == $stad) {
        echo "> $input is correct!" . PHP_EOL;
        $goed[] = $stad;
    } else {
          echo "$input helaas, $input is niet de hoofdstad van $land " . PHP_EOL;
          echo "het correcte antwoord is: $stad" . PHP_EOL;
    }
}
echo "je hebt " . count($goed) . " van de 10 goed geraden" . PHP_EOL;

?>