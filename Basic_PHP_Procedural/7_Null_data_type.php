<?php

/* null data type*/ 

// null constant
$x = null;
echo $x;// '' 
var_dump($x);// NULL
var_dump(is_null($x)); // bool(true)
var_dump($x === null); // bool(true)
var_dump((int)$x);// int(0)
var_dump((string)$x);// string(0)""
var_dump((array)$x);// array(0){}
?>