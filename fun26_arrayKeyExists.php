<?php
function arrayKeyExists($key,$array){
    $keyState = false;
    foreach ($array as $arrayKey => $value) {
        if ($arrayKey === $key) {
            $keyState = true;
            break;
        }
    }
    return $keyState;
}
//print_r(arrayKeyExists('second',array('first' => 1, 'second' => 4)));
?>