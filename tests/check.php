<?php
// print_r('HELLO');
$str1 = '    HELLO    ';
$str2 = '    ABCDE';


$check = trim($str2) != '' ? trim($str2) : (trim($str1) != '' ? trim($str1) : 'NOTHING') ;
print_r($check); 
print_r(strlen($check)); 
// print_r($str1); 
// print_r($str2);


?>