<?php

// arrays
$languages=['PHP', 'C', 'Python']; // or $languages=array('PHP', 'C', 'Python');

echo $languages[0]; // PHP  
echo $languages[-1]; // error(undefined arry key -1)  

$languages[1]='C++';
echo $languages[1]; // C++
print_r($languages);  // Array( [0] => PHP [1] => C++ [2] => Python)
echo count($languages); // 3

$languages[]= 'Java';    //this syntax pushes elements to the end of the array
print_r($languages); // Array( [0] => PHP [1] => C++ [2] => Python [3] => Java)

array_push($languages, 'GO', 'C');
print_r($languages); // Array( [0] => PHP [1] => C++ [2] => Python [3] => Java [4] => GO [5] => C)

$_languages=[
    'php' => '8.0',
    'python' => '3.9'
];
print_r($_languages); // Array( [php] => 8.0 [python] => 3.9)
echo $_languages['php']; //8.0

$_languages['go']= '1.15';
print_r($_languages); // Array( [php] => 8.0 [python] => 3.9 [go] => 1.15)
 //or
 $new_languages='C';
 $_languages[$new_languages]= '1.15';
 print_r($_languages); // Array( [php] => 8.0 [python] => 3.9 [go] => 1.15 [C] => 1.15)
  
//multi-dimensional array
 $languages_=[
    'php'=> [
        'website' => 'www.php.net',
        'isOpenSource' => true,
        'versions' => [
            ['version' => 8,'releaseDate' => 'Nov 26 2020'],
            ['version' => 7.4,'releaseDate' => 'Nov 28 2019']
        ],
    ],
    'python'=> [
        'website' => 'www.python.net',
        'isOpenSource' => true,
        'versions' => [
            ['version' => 3.9,'releaseDate' => 'Oct 5 2020'],
            ['version' => 3.8,'releaseDate' => 'Oct 14 2019']
        ],
    ],
];
print_r($languages_);
/*  out put

Array
(
    [php] => Array
        (
            [website] => www.php.net
            [isOpenSource] => 1
            [versions] => Array
                (
                    [0] => Array
                        (
                            [version] => 8
                            [releaseDate] => Nov 26 2020
                        )

                    [1] => Array
                        (
                            [version] => 7.4
                            [releaseDate] => Nov 28 2019
                        )

                )

        )

    [python] => Array
        (
            [website] => www.python.net
            [isOpenSource] => 1
            [versions] => Array
                (
                    [0] => Array
                        (
                            [version] => 3.9
                            [releaseDate] => Oct 5 2020
                        )

                    [1] => Array
                        (
                            [version] => 3.8
                            [releaseDate] => Oct 14 2019
                        )

                )

        )

)

*/
echo $languages_['php']['website']; // www.php.net
echo $languages_['php']['versions'][0]['version']; // 8

$array =[
    0 => 'foo',
    1 => 'bar',
    '1'=> 'baz'
];
print_r($array); // Array ([0] =>foo [1]=>baz)   value of the same key overwrites with the last the same key value  

$arrays=[
    true => 'foo',
    1 => 'bar',
    '1'=> 'baz',
    1.8=>'d',
    null => 'e'
];
print_r($arrays); // Array([1]=>d []=>e)     b/c true= 1 and 1.8= accepted by integer data type= 1 so all the value of key=1 overwrites with 'd' 
print_r($arrays['']); // e
print_r($arrays[null]); // e

$_array =[
    'foo',
    100 => 'bar',
    'baz',
    'ben'=>'bill',
    'b'
];
print_r($_array); // Array( [0] => foo [100] => bar [101] => baz [ben] => bill [102] => b)

echo array_pop($_array); // b  
print_r($_array); // Array( [0] => foo [100] => bar [101] => baz)

echo array_shift($_array); // foo
print_r($_array); // Array([0] => bar [1] => baz [ben] => bill)

unset($_array[0]);
print_r($_array); // Array([1] => baz [ben] => bill)

unset($_array[0], $_array['ben']);
print_r($_array); // Array([1] => baz [ben])
$_array[0]='fo';
print_r($_array); // Array([1] => baz [ben] [0]=> fo)   b/c the zero index was unset

var_dump(array_key_exists(1, $_array)); // bool(true)
?>