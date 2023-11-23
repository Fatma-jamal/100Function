<?php
function stringLength($text){
    $counter = 0;
    while (isset($text[$counter])){
        $counter++;
    }
    return $counter;

}
echo stringLength('hello');
?>