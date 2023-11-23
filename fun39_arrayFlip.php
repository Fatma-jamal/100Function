<?php
function arrayFlip($array){
    $flippedArr=[];
    foreach($array as $key=>$value){
        if(!isset($flippedArr[$value])){
            $flippedArr[$value] = $key;
        }
    }
    return $flippedArr;
}
//print_r(arrayFlip(['red', 'green', 'blue']));
?>