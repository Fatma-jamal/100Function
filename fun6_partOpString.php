<?php
include 'fun2_stringLength.php';
 function partOpString($text,$num,$strLength = null){
    $newText = '';
    $counter = 0;
    for ($i=0; $i < stringLength($text);$i++) {
        if ($i >= $num && ($strLength == null || $counter < $strLength)){
            $newText .= $text[$i];
            $counter ++;
        }
    }
    return $newText;
}
echo partOpString('hello world',6);

?>
