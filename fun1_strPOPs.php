<?php
include 'fun2_stringLength.php';
function strPOPs($str,$letter){
        for ($i =0;$i< stringLength($str);$i++){
            if ($str[$i] == $letter){
                return $i;
                //break;
            }
        }
    }
//echo strPOPs('hello','l');
?>