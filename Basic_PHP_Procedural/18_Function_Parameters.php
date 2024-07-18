<?php
/** Function Parameters */

function foo($x, $y){ 
    return $x+$y;
} 
echo foo(5, 10); // 15
/*
function fo0(int $x, int $y){ 
    return $x+$y;
} 
echo fo0(5.0, '10'); // 15 
*/

function fo(int $x, int $y=10){ 
    $x+=1;
    return $x+$y;
} 
$a=5.0;
echo fo($a); // 16
echo $a;// 5

function f(int &$x, int $y=10){ 
    $x+=1;
    return $x+$y;
} 
$a=5.0;
echo f($a); // 16 
echo $a;// 6

function sum(...$nums) : int{ 
    
    return array_sum($nums);
}  
echo sum(2,4,7,9,6);  //28

/*
function sum(...$nums) : int{ 
    $sum=0;
    foreach($nums as $num){
        $sum +=$num;
    }
    return $sum;
}  
echo sum(2,4,7,9,6);  //28
*/
function sum1($x,$y,...$nums) : int{ 
    
    return $x+$y+ array_sum($nums);
}  
$a=2;$b=4;
echo sum1($a,$b,7,9,6);  //28

function sum2($x,$y,...$nums) : int{ 
    
    return $x+$y+ array_sum($nums);
}  
$a=2;$b=4;
$numbers=[7,9,6];
echo sum2($a,$b,...$numbers);  //28

function sum3($x,$y) : int{ 
    
    if($x % $y === 0){
        return $x +$y;
    }
    return $x;
}  
$a=2;$b=4; 
echo sum3($b,$a);  //6
/* on php 8.0
function sum4($x,$y) : int{ 
    
    if($x % $y === 0){
        return $x +$y;
    }
    return $x;
}  
$a=2;$b=4; 
echo sum4(y: $a,x: $b);  //6
*/
?>