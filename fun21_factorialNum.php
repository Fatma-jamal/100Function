<?php
function factorialNum($num){
    $fact = 1;
    for ($i = 1; $i <= $num; $i++) {
        $fact *= $i;
    }
    return $fact;
        
}
//echo factorialNum(5);
?>