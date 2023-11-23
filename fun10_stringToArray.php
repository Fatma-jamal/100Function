<?php
include 'fun9_explodeFun.php';

 function stringToArray($char,$text){

    $array = [];
    $wordsArray = explodeFun(' ', $text);
    foreach($wordsArray as $value) {
            $array[] = $char.$value;
    }
    return $array;
}
print_r(stringToArray('#', 'hello world'));
?>