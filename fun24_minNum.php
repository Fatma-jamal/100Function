<?php
function minNum($num,...$nums){
    $min = $num;
    foreach ($nums as $value) {
        if ($value < $min){
            $min = $value;
        }
    }
    return $min;
}
//print_r(minNum(12,13,14,11,20s));
?>