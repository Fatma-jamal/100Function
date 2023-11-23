<?php
function getMaxValueInArray($array){
    $maxVal = null;
    foreach ($array as $value) {
        if (!isset($maxVal)) {
            $maxVal = $value;
        } 
        elseif ($value > $maxVal) {
            $maxVal = $value;
        }
    }
    return $maxVal;
}
//print_r(getMaxValueInArray(array(-5, 6, 7, -10, 9)));
?>