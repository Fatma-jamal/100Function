<?php
function absNum($number){
    if ($number >= 0){
        return $number;
    }
    else {
        return -$number;
    }
}
//echo absNum(-20);
?>