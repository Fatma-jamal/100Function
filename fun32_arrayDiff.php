<?php
include 'fun16_inArray.php';
function arrayDiff($array1,$array2){
    $diffArr = [];
    foreach ($array1 as $key => $val) {
        if(!inArray($val, $array2)){
            $diffArr[]=$val;
        }
    }
    return $diffArr;
}
//print_r(arrayDiff(array("a" => "green", "red", "blue", "red"), array("b" => "green", "yellow", "red")));
?>