<?php

// $cities = ['amsterdam' , 'brussel' , 'cairo'];

// $cities[] = 'dakar';

// foreach ($cities as $city) {
//     echo $city . PHP_EOL;
// }

// $countries = ['nederland' => 'amsterdam', 'belgie' => 'brussel'];
// $countries['egypte'] = 'cairo';

// foreach ($countries as $land => $hoofdstad) {
//     echo "$land $hoofdstad" . PHP_EOL; 
// }

$countries = [
    ['nederland' , 'amsterdam', 17],
    ['belgie' , 'brussel', 10],
    ['egypte', 'cairo', 102]
];

$countrues[]= ['duitsland', 'berlijn', 84];

foreach ($countries as $country => $at) {
    foreach ($at as $at) {
        echo "$at" . PHP_EOL;
    }
}

?>