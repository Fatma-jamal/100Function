<?php
include 'fun9_explodeFun.php';
function countString($text){
    $count = 0;
    $wordsArray = explodeFun(' ', $text);
    foreach ($wordsArray as $value) {
       $count ++;
    }
    return $count;
}
echo countString('hello world');
?>
