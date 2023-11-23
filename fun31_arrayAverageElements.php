<?php
include 'fun30_arraySumElements.php';
include 'fun27_countArray.php';
function arrayAverageElements($array){
    $avg = arraySumElements($array)/countArray($array);
    return $avg;
}
//print_r(arrayAverageElements(array(4, 8, 10, 20, 100)));
?>