<?php

$list = array();

function printList()
{
    global $list;
    echo "Je boodschappen lijstje bevat nu:" . PHP_EOL;
    foreach ($list as $value) {
        echo $value . PHP_EOL;
    }
}

$product = readline("Wat wil je aan je boodschappenlijst toevoegen?");
array_push($list, $product);

printList();

echo "Bedankt voor het gebruik van de boodschappenlijst!" . PHP_EOL;

while (strtolower(substr(trim(readline("Wil je meer producten toevoegen? (ja/nee)")), 0, 1)) === 'y') {
    $product = readline("Wat wil je aan je boodschappenlijst toevoegen?");
    array_push($list, $product);
    printList();
}

?>