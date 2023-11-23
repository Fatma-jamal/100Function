<?php
include 'fun27_countArray.php';

function arraySort($array){
    for ($i = 0; $i < countArray($array) - 1; $i++) {
        for ($j = 0; $j < countArray($array) - $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    return $array;  
}
//print_r(arraySort(["banana","cherry","apple"]));
?>