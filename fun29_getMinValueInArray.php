<?php
function getMinValueInArray($array){
    $minVal = null;
    foreach ($array as $value) {
        if (!isset($minVal)) {
            $minVal = $value;
        } 
        elseif ($value < $minVal) {
            $minVal = $value;
        }
    }
    return $minVal;
}
//print_r(getMinValueInArray(array(-5, 6, 7, -10, 9)));
?>