<?php
$a = array("A","Cat","Dog","A","Dog");
function arrayCountValues($array){
    $counts=[];
    foreach ($array as $key => $value) {
        if (!isset($counts[$value])){
            $counts[$value]=0;
        }
        $counts[$value]+=1;
    }
    return $counts;

}
print_r(arrayCountValues($a));
?>