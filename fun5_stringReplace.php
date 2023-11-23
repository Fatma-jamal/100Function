<?php
include 'fun2_stringLength.php';
include 'fun6_partOpString.php';

function stringReplace($text1,$text2,$originalText){
    $result = "";
    for ($i = 0; $i < stringLength($originalText); $i++) {
        if (partOpString($originalText, $i, stringLength($text1)) == $text1) {
            $result .= $text2;
            $i += stringLength($text1) - 1;
        } 
        else {
            $result .= $originalText[$i];
        }
    }
    return $result;
}
//echo stringReplace('world','Peter','Hello world!');
?>