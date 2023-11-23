<?php
 function inArray($value,$array){
    $state = false;
    foreach ($array as $val) {
        if ($val == $value) {
            $state = true;
            break;
        }
    }
    return $state;
}
print_r(inArray('Mac',array("Mac", "NT", "Irix", "Linux")));
?>