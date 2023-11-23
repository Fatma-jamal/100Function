<?php
include 'fun16_inArray.php';
function arrayUnique($array){
    $result=[];
    foreach ($array as $key => $value) {
        if(!inArray($value,$result)){
            $result[]=$value;
        }
    }
    return $result;
}
print_r(arrayUnique(['cat', 'dog', 'lion','tiger','cat']));
?>