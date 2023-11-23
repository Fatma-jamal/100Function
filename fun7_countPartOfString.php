<?php
include 'fun2_stringLength.php';
include 'fun6_partOpString.php';

function countPartOfString($text,$word){
    $count = 0;
    $textLen = stringLength($text);
    $wordLen = stringLength($word);
    for ($i = 0; $i <= $textLen - $wordLen; $i++) {
        if (partOpString($text, $i, $wordLen) == $word) {
            $count++;
        }
    }

    return $count;
}
echo countPartOfString("hello world world","world");

?>
