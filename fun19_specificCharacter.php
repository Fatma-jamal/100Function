<?php
include 'fun2_stringLength.php';
include 'fun6_partOpString.php';
function specificCharacter($text){
    $count=0;
    $store = '';
    for ($i =0 ;$i < stringLength($text);$i++){
        for ($j =0 ;$j < stringLength($store);$j++){
            if (partOpString($text ,$i,1) == $store[$j]){
                continue;
            }
            else{
                $store .= $text[$i];
            }
        }
       
    }
    return $store;
}
//echo specificCharacter('hello');
?>