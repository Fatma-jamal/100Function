<?php
function arrayValues($arr){
    $values=[];
    foreach($arr as $key =>$value){
        $values[] = $value;
    }
    return $values;
    }
//print_r(arrayValues(['name'=>'John','age'=>25,'city'=>'New York']));
?>