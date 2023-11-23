<?php
include 'fun27_countArray.php';

function arrayReverse($arr){
    $revArr=[];
    for($i = countArray($arr)-1; $i >= 0; $i--){
        $revArr[]=$arr[$i];
    }
    return $revArr;
    }
//print_r(arrayReverse([1,2,3,4,5]));
?>