<?php
function arraySearch($value,$array){
    $keys='';
    foreach ($array as $key => $val) {
        if($val==$value){
            $keys .= $key;
        }
    }
    return $keys;
}
//print_r(arraySearch("green",["red","green","blue"]));
?>