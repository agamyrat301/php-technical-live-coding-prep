<?php
//custom array revers in php

$arrayExample = [
    1,
    2,
    3,
    4,
    5,
    6,
    7,
    8,
    9
];

function arrayReverseCustom(array $arr): array
{
    $length = count($arr);

    for ($i = 0; $i < (int)($length / 2); $i++) {
        $oppositeIndex = $length - 1 - $i;

        $temp = $arr[$i];
        $arr[$i] = $arr[$oppositeIndex];
        $arr[$oppositeIndex] = $temp;
    }

    return $arr;
}

print_r(arrayReverseCustom($arrayExample));
