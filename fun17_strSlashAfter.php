<?php
include 'fun2_stringLength.php';

function strSlashAfter($str,$letter){
    $newText ="";
    for ($i =0;$i< stringLength($str);$i++){
        if ($str[$i] == $letter){
            $newText .=$str[$i] ."/";
        }
        else{
            $newText .=  $str[$i];
        }
    }
    return $newText;
}
echo strSlashAfter('hello','l');
?>