<?php
// custom sort array
$array1 = [
    100,
    20,
    344,
    1222,
    32,
    56,
    987
];

function custom_sort_array(array $arrayUnsorted):array
{
    $length = count($arrayUnsorted);

    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = 0; $j < $length - $i - 1; $j++) {
            if ($arrayUnsorted[$j] > $arrayUnsorted[$j + 1]) {
                $temp = $arrayUnsorted[$j];
                $arrayUnsorted[$j] = $arrayUnsorted[$j + 1];
                $arrayUnsorted[$j + 1] = $temp;
            }
        }
    }

    return $arrayUnsorted;
}


print_r(custom_sort_array($array1));
