<?php

require 'helpers.php';

// array_chunk(array $array, int $length, $preserveKeys = false):array

$items =['a' => 1, 'b'=> 2, 'c'=>3, 'd'=> 4, 'e'=> 5];
//or
$itemss=[1,2,3,4,5];
prettyPrintArray(array_chunk($items, 2));
/*
// out put for $items or  $itemss
Array
(
    [0] => Array
        (
            [0] => 1
            [1] => 2
        )

    [1] => Array
        (
            [0] => 3
            [1] => 4
        )

    [2] => Array
        (
            [0] => 5
        )

)
*/

prettyPrintArray(array_chunk($items, 2, true));
/*
// out put for $items
Array
(
    [0] => Array
        (
            [a] => 1
            [b] => 2
        )

    [1] => Array
        (
            [c] => 3
            [d] => 4
        )

    [2] => Array
        (
            [e] => 5
        )

)

// out put for $itemss
Array
(
    [0] => Array
        (
            [0] => 1
            [1] => 2
        )

    [1] => Array
        (
            [2] => 3
            [3] => 4
        )

    [2] => Array
        (
            [4] => 5
        )

)
*/

// array_combine(array $keys, array $values): array

$array1 =['a', 'b', 'c'];
$array2 =[5, 10, 15];

prettyPrintArray(array_combine($array1, $array2));
/* 
// both array must be the same number of elements
Array
(
    [a] => 5
    [b] => 10
    [c] => 15
)
    */

    //array_filter(array $array, callable|null $callback = null, int $mode = 0):array

    $array =[1,2,3,4,5,6,7,8,9,10];

    $even = array_filter($array, fn($number)=> $number%2===0,ARRAY_FILTER_USE_BOTH);
//or 
//$even = array_filter($array, fn($number)=> $number%2===0);
    prettyPrintArray($even);

    /*
    Array
(
    [1] => 2
    [3] => 4
    [5] => 6
    [7] => 8
    [9] => 10
)
*/

$even = array_filter($array, fn($number)=> $number%2===0,ARRAY_FILTER_USE_KEY);

prettyPrintArray($even);

/*
Array
(
    [0] => 1
    [2] => 3
    [4] => 5
    [6] => 7
    [8] => 9
)
*/

$even = array_filter($array, fn($number)=> $number%2===0,ARRAY_FILTER_USE_KEY);
$even =array_values($even);
prettyPrintArray($even);

/*
Array
(
    [0] => 1
    [1] => 3
    [2] => 5
    [3] => 7
    [4] => 9
)
*/

$array3 =[1,2,3,4,5,false,0,9,0.0];
$even = array_filter($array3);
$even =array_values($even);
prettyPrintArray($even);

/*
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
    [5] => 9
)
*/

// array_keys 

$array5 =['a' => 5, 'b' => 10, 'c' => 15, 'd' => 5 , 'e' => 10];
$keys = array_keys($array5);
prettyPrintArray($keys);

/*
Array
(
    [0] => a
    [1] => b
    [2] => c
    [3] => d
    [4] => e
)
*/
$keys = array_keys($array5, 10);
//or
//$keys = array_keys($array5, 10,true);
//or
//$keys = array_keys($array5, '10');
prettyPrintArray($keys);
/*
Array
(
    [0] => b
    [1] => e
)
    */

    $keys = array_keys($array5, '10',true);
prettyPrintArray($keys);
/*
Array
( 
)
*/

//array_map

$array6 =[1,2,3,4,5,6];

$array_6=array_map(fn($number)=>$number*3, $array6);

prettyPrintArray($array_6);

/*
Array
(
    [0] => 3
    [1] => 6
    [2] => 9
    [3] => 12
    [4] => 15
    [5] => 18
)
*/
$array7 =['a'=> 1, 'b'=>2,'c'=>3];
$array8 =['d'=> 4, 'e'=>5,'f'=>6];

$array_=array_map(fn($number1,$number2)=> $number1*$number2, $array7,$array8);

prettyPrintArray($array_);
/*
Array
(
    [0] => 4
    [1] => 10
    [2] => 18
)
*/
$array_7 =['a'=> 1, 'b'=>2];
$array_8 =['d'=> 4, 'e'=>5,'f'=>6];

$array_=array_map(fn($number1,$number2)=> $number1*$number2, $array_7,$array_8);

prettyPrintArray($array_);
/*
Array
(
    [0] => 4
    [1] => 10
    [2] => 0     if $number1+$number2 then this key[2] value= 6
)
*/
// array_merge

$arr1 =[1,2,3];
$arr2 =['6'=>4,'7'=>5,'8'=>6];
$arr3 =[7,8,9];

$merge= array_merge($arr1,$arr2,$arr3);
prettyPrintArray($merge);
/*
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
    [5] => 6
    [6] => 7
    [7] => 8
    [8] => 9
)
*/

$arr_1 =['6'=>1,'7'=>2,'8'=>3];
$arr_2 =[ 4, 5, 6];
$arr_3 =[7,8,9];

$merge= array_merge($arr_1,$arr_2,$arr_3);
prettyPrintArray($merge);
/*
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
    [5] => 6
    [6] => 7
    [7] => 8
    [8] => 9
)
*/
$ar_1 =['d'=>1,'e'=>2,'f'=>3];
$ar_2 =[ 4, 5, 6];
$ar_3 =[7,8,'f'=>9];

$merge= array_merge($ar_1,$ar_2,$ar_3);
prettyPrintArray($merge);
/*
Array
(
    [d] => 1
    [e] => 2
    [f] => 9
    [0] => 4
    [1] => 5
    [2] => 6
    [3] => 7
    [4] => 8
)
*/

// array_reduce

$invoiceItems=[
    ['price'=> 9.99, 'qty'=> 3, 'desc'=> 'Item 1'],
    ['price'=>29.99, 'qty'=> 1, 'desc'=> 'Item 2'],
    ['price'=>  149, 'qty'=> 1, 'desc'=> 'Item 3'],
    ['price'=>14.99, 'qty'=> 2, 'desc'=> 'Item 4'],
    ['price'=> 4.99, 'qty'=> 4, 'desc'=> 'Item 5'],

];
$total=array_reduce(
    $invoiceItems,
    fn($sum, $item) => $sum + $item['qty']*$item['price']
);

echo $total; //258.9

$total=array_reduce(
    $invoiceItems,
    fn($sum, $item) => $sum + $item['qty']*$item['price'],
    500
);

echo $total; //758.9

// array_search

$ar=['a','b','c','D','E','ab','bc','cd','b','d'];

$key = array_search('b', $ar);
var_dump($key);//int(1)    [1]

$key = array_search('D', $ar);
var_dump($key);//int(3)    [3]

if($key === false){
    echo 'letter not found';
}
//or
if(in_array('a', $ar)){
    echo 'letter found';
}

//array_diff

$a=['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4 , 'e' => 5];
$a1=['d' => 4, 'g' => 5, 'i' => 6, 'j' => 7 , 'k' => 8];
$a2=['l' => 3, 'm' => 9, 'n' => 10];

prettyPrintArray(array_diff($a,$a1,$a2));
/*
//b/c 3,4and 5 apper on other two array so the left is 1 and 2
Array
(
    [a] => 1
    [b] => 2
)
    */
prettyPrintArray(array_diff_assoc($a,$a1,$a2));
prettyPrintArray(array_diff_key($a,$a1,$a2));

/*
//out put of  prettyPrintArray(array_diff_assoc($a,$a1,$a2));
 //  display only diff key with value so [d]=>4 no longer display

//out put of prettyPrintArray(array_diff_key($a,$a1,$a2));
 //  display only diff key only so [d](is there in two array) no longer display

Array
(
    [a] => 1
    [b] => 2
    [c] => 3 
    [e] => 5
)
    */

    // asort

    $s=['d' => 3, 'b' => 1, 'c' => 4, 'a' => 2];

    prettyPrintArray($s);
/*
Array
(
    [d] => 3
    [b] => 1
    [c] => 4
    [a] => 2
)
*/

asort($s);

prettyPrintArray($s);
/*
Array
(
    [b] => 1
    [a] => 2
    [d] => 3
    [c] => 4
)
*/
ksort($s);
prettyPrintArray($s);
/*
Array
(
    [a] => 2
    [b] => 1
    [c] => 4
    [d] => 3
)
*/
usort($s,fn($a,$b)=>$a<=>$b);
prettyPrintArray($s);
/*
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
)
*/
usort($s,fn($a,$b)=>$b<=>$a);
prettyPrintArray($s);
/*
Array
(
    [0] => 4
    [1] => 3
    [2] => 2
    [3] => 1
)
*/
$arra_y=[1,2,3,4,[5,6]];

//list($a,$b,$c,$d)= $arra_y;
//or
[$a,$b,$c,$d]=$arra_y;
echo $a,$b,$c,$d,"\n";  //1234

[$a,$b, ,$d]=$arra_y;
echo $a,$b,$d,PHP_EOL;  //124

[$a,$b, ,$d,[$e,$f]]=$arra_y;
echo $a,$b,$d,$e,$f,"\n";  //12456

[1=>$a,0=>$b,2=>$c]=$arra_y;
echo $a,$b,$c;  //213


$string='abcdf';
$arrayy =str_split($string);
print_r($arrayy);
/*
Array
(
    [0] => a
    [1] => b
    [2] => c
    [3] => d
    [4] => f
)*/

$string1="i am developer";
$arrayyy=explode(' ',$string1);
print_r($arrayyy);
/*
Array
(
    [0] => i
    [1] => am
    [2] => developer
)
    */
    $inputArray=[6,2,2,3,4,5,5,4,3];
    // Use array_count_values() to count values
$counts = array_count_values($inputArray);
print_r($counts);
/*
Array
(
    [6] => 1
    [2] => 2
    [3] => 2
    [4] => 2
    [5] => 2
)
    */

    $j=[1,1,2,3,2,3,4];
print_r (array_unique($j));

/*
Array
(
    [0] => 1
    [2] => 2
    [3] => 3
    [6] => 4
)
    */
    
    $prefixSum = array_fill(0, 1, 0);  
    $op=["aba","bcb","ece","aa","e"]; // to check start and end is vowel
    $oopp=[[0,2],[1,4],[1,1]]; // to check how many true by this interval
    /*
    0 -> TRUE
    1->FALSE
    2->TRUE
    3->TRUE
    4->TRUE

    (true) $prefixSum[$i + 1] = $prefixSum[$i] + 1 : $prefixSum[$i + 1] = $prefixSum[$i];

     foreach($queries as [$start , $end]) { 
          $result[] = $prefixSum[$end + 1] - $prefixSum[$start];
      }

     output= [2,3,0]
*/
$xcc=[1,2,3];
 print_r(array_slice($xcc,1,3)) ;
 /*Array
(
    [0] => 2
    [1] => 3
)*/
$ss_tr=["word","apple","you"];
//$matches = preg_grep("ap", $ss_tr);
