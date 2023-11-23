<?php
function repeatString($text,$times){
    $count = 0;
    while ($count < $times) {
        echo $text . "<br>";
        $count++;
    }

}

repeatString('hello',5);
?>