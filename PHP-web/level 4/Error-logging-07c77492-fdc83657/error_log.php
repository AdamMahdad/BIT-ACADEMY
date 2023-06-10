<?php

function countDown($num)
{
    if ($num >= 0 && $num <= 10) {
        echo "Correct number!";
    } else {
        throw new Exception();
    }
}
echo "kies een getal" . PHP_EOL;
$q = readline("");

try {
    countDown($q);
} catch (Exception $e) {
    error_log("Did not put a number 0-10", 0);
}
?>

