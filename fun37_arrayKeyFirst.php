<?php
function arrayKeyFirst($arr){
    foreach($arr as $key=>$value){
        return $key;
    }
}
//print_r(arrayKeyFirst(['a' => 1, 'b' => 2, 'c' => 3]));
?>