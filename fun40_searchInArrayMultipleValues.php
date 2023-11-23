<?php
include 'fun16_inArray.php';
include 'fun41_isArray.php';
function searchInArrayMultipleValues($search,$arr){
    $result=false;
    foreach ($arr as $item) {
        if (isArray($item)) {
            if (inArray($search, $item)) {
                $result=true;
            }
            } 
            elseif ($item == $search) {
                $result=true;
            }
    }
    return $result;
    }
//print_r(searchInArrayMultipleValues('green',['red', ['green'], 'blue']));
?>