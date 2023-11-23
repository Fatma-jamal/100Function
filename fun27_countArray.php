<?php
function countArray($array){
    $count = 0;
    foreach ($array as $value) {
        $count++;      
    }
    return $count;
}
//print_r(countArray(array("Mac", "NT", "Irix", "Linux")));
?>