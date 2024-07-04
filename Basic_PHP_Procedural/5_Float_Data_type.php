<?php
/* float data type */

$x= 13.5e-3; // means e-3 = 10^-3

echo $x; // 0.0135
var_dump($x); //float(0.0135) also float(13500) for $x= 13.5e3;
echo PHP_FLOAT_MAX; // 1.7976931348623E+308

$y=floor((0.1+0.7)*10);
echo $y; // 7 b/c binary is used internally to store the floating numbers and therefore when converting 0.1+0.7)*10  into a binary internally it loses some of the precision and in this case 0.1+0.7)*10=7.9999999999991118 and floor basically just rounds all the numbers down.
$y=ceil((0.1+0.7)*10);
$z=ceil((0.1+0.2)*10);
echo $y;//8 b/c ceil basically just rounds all the numbers up.
echo $z; // 4 b/c (0.1+0.2)*10 = 3.0000000000000004

$x=0.23;
$y=1-0.77;

var_dump($x,$y);//float(0.23)float(0.23)
if($x==$y){
    echo"yes";
}else{
    echo "no"; // the correct out put is 'no' 
}
/*
never compare floats directly like the above 
*/

echo NAN; // NAN      stands for not a number
echo log(-1); // NAN
echo INF; // INF      stands for infinity 
$x= PHP_FLOAT_MAX * 2;

echo $x;// INF
var_dump($x); //float(INF)
var_dump(is_infinite($x)); // bool(true)
var_dump(is_nan($x)); // bool(false)     b/c 'is_nan' means is not a number
$x='hkas';
$y='15.5a';
$z=20_035.5;
var_dump((float)$x); // float(0)
var_dump((float)$y); // float(15.5)
var_dump($z);//float(20035.5)
?>