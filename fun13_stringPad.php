<?php
include 'fun2_stringLength.php';

function stringPad($text,$length,$complete){
    while (stringLength($text)<$length){
        $text .= $complete;
    }
    return $text;
}
echo stringPad("Hello World",20,".");
?>