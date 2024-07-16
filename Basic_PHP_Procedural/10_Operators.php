<?php

/* OPERATORS */

// Arithmetic Operators (+ - * / % **)
$x =10;
$y =2;
$z =3;
$w=-3;
$v=-10;
var_dump($x + $y);// int(12)
var_dump($x/$y);// float(3.33333333333)
var_dump($x/$w);// int (1)
var_dump($v/$z);// int (-1)

// Assignment Operators(= += -= *= /= %= **=)
$x=$y=5;

var_dump($x,$y);// int(5)int(5)
$x+=3;
echo $x;//8

// Comparision Operators(== === < > <= >= <==> ??  ?: <>)
$x =5;
$y ='5';
var_dump($x==$y);//bool(true)
var_dump($x===$y); // bool(false) b/c it has different data type

$x='Hello';
$y=strpos($x,'H');
if($y == false){
    echo 'H not found';
}else{
    echo 'H found at index'.$y;
}
/* output
//H not found b/c this return the index 0 

if($y === false){
    echo 'H not found';
}else{
    echo 'H found at index'.$y;
}
    // out put= H found at index 0
*/
$result =$y===false? 'h not found' : 'h found at index'.$y;

// Error Control Operators(@)
$x=@file('foo.txt'); // there is no error message on screen for file if it's not exist

//Increment/Decrement Operators(++ ---)
$x=5;
$y=5;
echo $x++;//5
echo $x; //6
echo ++$y;//6
echo $y;//6

$x=true;
echo ++$x;//1   also for $x= null  and the same for decrement

$x='abc';
echo ++$x;//abd but this isn't work for decrement

//logical Operators(&& || ! and or xor)
$x=true;
$y=false;
$z=$x && $y;
$w=$x and $y;

var_dump($z);//bool(false)
var_dump($w);//bool(true)   b/c first evaluate ($w=$x) then (and $y) so that if $x= true then $w=true

//Bitwise Operators(& | ^ ~ << >>)
$x=6; //110
$y=3;//011
// 110 & 011 = 010      010=2

var_dump($x & $y); //int(2)

$x=6; //110
$y=3;//011
// 110 | 011 = 111      111=7

var_dump($x | $y); //int(7)

$x=6; //110
$y=3;//011
// 110 ^ 011 = 101      101=5

var_dump($x ^ $y); //int(5)
 

?>