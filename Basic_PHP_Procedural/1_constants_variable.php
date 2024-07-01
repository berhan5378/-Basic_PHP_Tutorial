<?php

//constants

$name='berhan';
$name='barry';
echo $name; //barry

define('STATUS_PAID', 'paid');
echo STATUS_PAID; // paid
echo define('STATUS_PAID'); //out put is 1 b/c defined on line 9

const STATUS_VOID = 'paid';
echo STATUS_VOID; // paid

if(true){
    define('STATUS', 9); 
    echo STATUS; // 9  BUT this(control structure) is not work for 'const('STATUS', 9);'
}

$sell ='SELL';

define('STATUS_'. $sell, $sell);
echo STATUS_SELL; // SELL

// variable variables

$foo ='bar';
$$foo ='baz'; // means $bar ='baz'
 
echo $foo , $bar; // barbaz
echo $foo , $$foo;//barbaz
echo "$foo , $$foo";//bar , $bar
echo "$foo , {$$foo}";//bar , baz
?>