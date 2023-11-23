<?php
function arrayKeyLast($arr){
    $count = 0;
    foreach($arr as $key=>$value){
        $count++;
    }
    return $key;
}
//print_r(arrayKeyLast(['a' => 1, 'b' => 2, 'c' => 3]));
?>