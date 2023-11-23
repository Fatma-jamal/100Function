<?php
include 'fun2_stringLength.php';
include 'fun6_partOpString.php';
include 'fun9_explodeFun.php';
function strSplit($text,$length){
    $arr1 = explodeFun(" ",$text);
    $arr2= array();
    //return $arr1;
    // foreach($arr1 as $value)
    //for ($i = 0; $i< stringLength($arr1); $i++)
    foreach($arr1 as $value){
        if (stringLength($value) > $length){
            $arr2[] =partOpString($value,0,$length);
           
        }
        else{
            $arr2[] = partOpString($value,$length);
           
        }
    }
    return $arr2;
    
}
//print_r(strSplit('hello world',3));
?>