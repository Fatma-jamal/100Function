<?php
function maxNum($num,...$nums){
    $max = $num;
    foreach ($nums as $value) {
        if ($value > $max){
            $max = $value;
        }
    }
    return $max;
}
//print_r(maxNum(12,13,14,11,20));
?>