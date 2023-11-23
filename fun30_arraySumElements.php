<?php
function arraySumElements($array){
    $sum = 0;
    foreach ($array as $value) {
        $sum += $value;
    }
    return $sum;
}
//print_r(arraySumElements(array(4, 8, 10, 20, 100)));
?>