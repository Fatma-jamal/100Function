<?php
include 'fun2_stringLength.php';
include 'fun6_partOpString.php';
function strRPops($text,$substring){
    for ($i = (stringLength($text)-1); $i >= 0 ; $i--) {
        if (partOpString($text, $i, stringLength($substring)) == $substring) {
            return $i;
        }
    }
    return false;
}
//echo strRPops("test.txt", ".");
?>