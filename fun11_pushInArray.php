<?php
// $a = array("red", "green");

function pushInArray($array, ...$items) {
    foreach ($items as $item) {
        $array[] = $item;
    }
    return $array;
}

print_r(pushInArray(array("red", "green"), 'blue','white'));
?>