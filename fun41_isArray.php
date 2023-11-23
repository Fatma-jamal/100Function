<?php
function isArray($array){
    if(gettype($array)=="array"){
        return true;
    }
    else{
        return false;
    }
}
//print_r(isArray(["red","green","blue"]));
?>