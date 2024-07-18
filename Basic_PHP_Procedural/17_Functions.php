<?php
//Functions

function foo(){
    echo 'hello'; // hello
}
foo();

function fo(){ 
    return 'hi';
} 
echo fo(); // hi
var_dump(fo()); //string(2) "hi"

// functions inside function
function mul(){
    echo 'foo'; // foo
    function bar(){
        echo 'bar'; // bar
    }
}
mul();
bar();

function f(): int{ 
    return '1';
}  
var_dump(f());  // int(1) 

function b(): ?int{ 
    return null; 
}  
var_dump(b());  // NULL 

/* it's work on php 8.0
function c(): int|float|array { 
    return 1.2; 
}  
var_dump(c());  //float(1.2) 
*/
/*
function c(): mixed { 
    return 1.2; 
}  
var_dump(c());  //float(1.2) 
*/
?>