<?php

$jasd = $argv[1];

function FunctionName($leeftijd)
{
    if ($leeftijd > 18) {
        echo("je mag vechten");
    }elseif ($leeftijd >= 80) {
        echo "wat doe je hier nog ga slapen";
    }else{
        echo("nee qowed");
    } 
}

FunctionName($jasd);

?>