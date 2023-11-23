<?php
include 'fun6_partOpString.php';
include 'fun44_strRPops.php';
function getFileExtension($file_name){
    $extension = partOpString($file_name, strRPops($file_name, '.') + 1);
    return $extension;
    }
//echo getFileExtension("test.txt");
?>