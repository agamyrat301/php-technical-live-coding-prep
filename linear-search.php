<?php

// implement linear search
// binary search is much faster than linear search
$array1 = [
    'testhere',
    'Alicia',
    'Muhammet',
    'Aman',
    'ymam'
];

function linearSearch(array $arrays,string $keyword){
    foreach ($arrays as $arr) {
        if($arr === $keyword){
            return $arr.PHP_EOL;
        }
    }
}

echo linearSearch($array1,'Aman');