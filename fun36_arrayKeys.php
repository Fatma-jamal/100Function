<?php
function arrayKeys($arr){
    $keys=[];
    foreach($arr as $key=>$value){
        $keys[] = $key;
    }
    return $keys;
    }
//print_r(arrayKeys(['name'=>'John','age'=>25,'city'=>'New York']));
?>