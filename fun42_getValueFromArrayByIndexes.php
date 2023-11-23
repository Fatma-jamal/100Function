<?php
include 'fun27_countArray.php';

function getValueFromArrayByIndexes($indexes,$array){
    $returnData=$array;
    for($i = 0; $i < countArray($indexes); $i++){
        $returnData = $returnData[$indexes[$i]];
    }
    return $returnData;
}
//print_r(getValueFromArrayByIndexes([0,1],[[1,2],[3,4]]));
?>
