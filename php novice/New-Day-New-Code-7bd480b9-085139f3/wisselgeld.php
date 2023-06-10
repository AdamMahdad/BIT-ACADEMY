<?php

$bedrag = $argv[1];

const WISSELGELD = array(20, 10, 5, 2, 1);

if (!isset($argv[1])) {
    exit("Geen wisselgeld");
} elseif (intval($argv[1]) == 0) {
    exit("Geen wisselgeld");
}

foreach ((WISSELGELD) as $waarde) {
    $aantal = floor($bedrag / $waarde);

    if ($aantal > 0) {
        echo "$aantal x $waarde euro" . PHP_EOL;
    }
    $bedrag = $bedrag % $waarde;
}

?>