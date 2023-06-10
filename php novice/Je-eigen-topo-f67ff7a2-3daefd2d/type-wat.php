<?php

echo 'wat is je gebruikersnaam' . PHP_EOL;
$input1 = readline();

echo 'wat is je wachtwoord' . PHP_EOL;
$input = readline();

echo 'type in je wachtwoord om in te loggen' . PHP_EOL;
$input2 = readline();

if ($input2 == $input) {
    echo "welkom op je account $input1";
} else {
    echo 'dit s niet jouw account';
}

?>