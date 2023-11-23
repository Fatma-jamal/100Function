<?php
include 'fun2_stringLength.php';
include 'fun6_partOpString.php';

   function explodeFun($separator,$text){
    $arr = [];
    $temp="";
    for ($i =0;$i<stringLength($text);$i++){
        if (partOpString($text,$i,stringLength($separator)) == $separator){
            $arr[]=$temp;
            $temp="";
            $i += stringLength($separator) - 1;
        }
        else{
            $temp .= $text[$i];
        }
   }
   $arr[] = $temp;
   return $arr;

}
print_r(explodeFun(" ","Hello world"));
?>