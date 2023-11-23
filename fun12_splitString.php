<?php
include 'fun2_stringLength.php';
function splitString($text){
    $array = [];
    for ($i=0; $i < stringLength($text); $i++) {
        $array[] = $text[$i];
    }
    return $array;
}
print_r(splitString('hello world'));
?>