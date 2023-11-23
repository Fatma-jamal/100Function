<?php
include 'fun2_stringLength.php';
function reverseText($text){
    $reverseStr ='';
    for ($x = (stringLength($text)-1); $x >= 0; $x--) {
        $reverseStr .= $text[$x];
    }   
    return $reverseStr;
}
//echo reverseText('welcome');
?>