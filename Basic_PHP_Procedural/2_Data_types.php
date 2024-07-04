<?php
// data types and type casting

# 4 scalar types
    # bool - true/false
    $completed = true;
    $complete=false;
    # int  -  1,2
    $score = 75;
    # float - 1.2
    $price = 0.99;
    # string - "1.2"
    $greeting= 'hello world';

    echo $completed; // 1
    echo $complete; // ''
    echo gettype($completed);  // boolean  to know type of var.
    var_dump($completed);  // boolean(true)
    var_dump($greeting);  // string(9) "hello world"


# 4 compound types
    # array
    $companies =[1,2.4,'a',true];
    print_r($companies);  // Array( [0] => 1 [1] => 2.4 [2] => a [3] => 1)
    # object
    # callable
    # interable

# 2 special types
    # resource
    # null
/*
    function sum( $x , $y) {
        var_dump($x , $y);// int(2)string(1)"3"
        return $x + $y;
    }
    $sum = sum(2, '3');
    echo $sum; // 5
    var_dump(sum);// int(5)
*/
    function sum(int $x ,int $y) {
        var_dump($x , $y);// int(2)int(3)
        return $x + $y;
    }
    $sum = sum(2.5, '3');
    echo $sum; // 5
    var_dump(sum);// int(5)
    $r='5';
    $s=(int)'5';
    $t=(string)true;
    $y=(int)true;
    $z=(int)false;
    var_dump((int)$r);// int(5)
    var_dump($s);// int(5)  
    var_dump($t);// string(1)"1"
    var_dump($y);// int(1)
    var_dump($z);// int(0)
    /*
    declare(strict_types=1)  is restrict data types to know which data accepts
    */
?>