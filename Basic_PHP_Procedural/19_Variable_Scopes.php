<?php
//Variable Scopes
/*
$x =5;

function foo(){
    global $x;
    echo $x; // 5
    $x=10;
}
foo();
echo $x; // 10

// or 
$y=5;
function fo(){

    echo $GLOBALS['y']; // 5
    $GLOBALS['y'] = 10;
}
fo();
echo $y; // 10
*/ 

/*
function getvalue(){
    $value = someExpensiveFunction();
    return $value;
}

function someExpensiveFunction(){
    sleep(2);

    return 10;
}
echo getvalue(). "\n";  //  aftre two second excute 10
*/
function getvalue(){
   static  $value=null;
    if($value===null){
        $value = someExpensiveFunction();
    }
    return $value;
}

function someExpensiveFunction(){
    sleep(2);
echo 'processing';
    return 10;
}
// all excute after 2seconds
echo getvalue(). "\n"; //processing10
echo getvalue(). "\n";// 10 
echo getvalue(). "\n";// 10

/*

function getvalue(){
    $value=null;
    if($value===null){
        $value = someExpensiveFunction();
    }
    return $value;
}

function someExpensiveFunction(){
    sleep(2);
echo 'processing';
    return 10;
}
    // each excute after 2seconds
echo getvalue(). "\n"; //processing10
echo getvalue(). "\n";//processing10
echo getvalue(). "\n";//processing10
*/
?>