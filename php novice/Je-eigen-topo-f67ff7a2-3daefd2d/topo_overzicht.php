<?php

$array = [];
echo "hoeveel landen wil je toevoegen " . PHP_EOL;
$input = readline();

if (is_numeric($input)) {
    for ($i = 0; $i < $input; $i++) { 
        echo "welke land wil je toevoegen " . PHP_EOL;
        $input2 = readline();
        echo "wat is de hoofdstad van $input2 " . PHP_EOL;
        $input3 = readline();
        $array[$input2] = $input3;
    } 
}

echo "De volgende landen en steden zitten in de database:" . PHP_EOL;
foreach ($array as $input2 => $input3) {
    echo "$input2, $input3" . PHP_EOL;
}

?>




