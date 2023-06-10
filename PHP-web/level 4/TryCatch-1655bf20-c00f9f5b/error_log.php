<?php

function countDown($num)
{
    if ($num >= 0 && $num <= 10) {
        echo "Correct number!";
    } else {
        throw new Exception("Er is iets fout gegaan...");
    }
}

try {
    countDown($argv[1]);
} catch (Exception $e) {
    echo "Er is iets fout gegaan...";
}
?>