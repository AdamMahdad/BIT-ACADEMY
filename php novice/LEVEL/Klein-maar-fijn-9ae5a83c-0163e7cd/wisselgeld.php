<?php

if (!isset($argv[1])) {
    exit("Geen wisselgeld");
} elseif (intval($argv[1]) == 0) {
    exit("Geen wisselgeld");
}

$input = ($argv[1]);
$input = round($input += 0.02, 2, PHP_ROUND_HALF_UP);
$data = array(50, 20, 10, 5, 2, 1);
$data2 = array(50, 20, 10, 5);

const DEFINE = (0);
$geld = intval($input);
$cent = $input - $geld;
$cent = intval(round($cent * 100));
function wisselEuro($input, $data)
{
    foreach ($data as $value) {
        $wissel = floor($input / $value);
        if ($wissel >= 1) {
            $input = $input - ($value * $wissel);
            echo $wissel . " x " . $value . " euro" . PHP_EOL;
        }
    }
}
wisselEuro($input, $data);
function wisselCent($data2, $cent)
{
    foreach ($data2 as $value) {
        $restcent = floor($cent / $value);
        if ($restcent >= 1) {
            $cent = $cent - ($value * $restcent);
            echo $restcent . " x " . $value . " cent" . PHP_EOL;
        }
    }
}
wisselCent($data2, $cent);
function nuteloos()
{
}
?>
