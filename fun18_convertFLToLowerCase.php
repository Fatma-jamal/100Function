<?php
include 'fun6_partOpString.php';

function convertFLToLowerCase($text){
    $firstChar = partOpString($text,0,1);
    $restOfString = partOpString($text,1);
    return strtolower($firstChar).$restOfString;

}
echo convertFLToLowerCase("Hello world!");
?>