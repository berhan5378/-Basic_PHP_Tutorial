<?php 

// Integers

$x = 0x2A; // hex number
$y = 055; // octal number
$z = 0b11;  // binary number
echo $x; // 42  
echo $y; // 45  
echo $z; // 3   
$w = PHP_INT_MAX;
echo $w; // 9223372036854775807  
echo $w+1; // 9.2233720368548E+18 is double
$w= (int)$w+1;
var_dump($w); // double(9.2233720368548E+18)  this means force to change data type is not work for PHP_INT_MAX+1
$w= (int)'test';
var_dump($w) ; // int(0)   also  (int) null = int(0)
$w = (int)'67test';
var_dump($w); // int(67)
var_dump(is_int($w)); // bool(true)  b/c (int)'67test'= int(67) 
$w=2_000_0;
$d=(int)'2_000_0';
var_dump($w); // int(20000)
var_dump($d); // int(2)
 ?>