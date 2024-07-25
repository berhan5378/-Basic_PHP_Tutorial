<?php

// Error Handling
/*
trigger_error('Example error', E_USER_ERROR);

echo "\n",1;
*/
/* 
// output
Fatal error: Example error in C:\wamp64\www\tech_with_berhan\Full_PHP_Tutorial\Basic_PHP_Procedural\23_PHP_error_handling.php on line 5
*/

/*

trigger_error('Example error', E_USER_WARNING);

echo "\n",1;
*/
/*
// output
Warning: Example error in C:\wamp64\www\tech_with_berhan\Full_PHP_Tutorial\Basic_PHP_Procedural\23_PHP_error_handling.php on line 12

1
*/


/*
trigger_error('Example error', E_WARNING);

echo "\n",1;
*/
/*
//output
Fatal error: Uncaught ValueError: trigger_error(): Argument #2 ($error_level) must be one of E_USER_ERROR, E_USER_WARNING, E_USER_NOTICE, or E_USER_DEPRECATED in C:\wamp64\www\tech_with_berhan\Full_PHP_Tutorial\Basic_PHP_Procedural\23_PHP_error_handling.php on line 27
*/

function errorHandler(
    int $type,
    string $msg,
    ?string $file = null,
    ?int $line =null
){
    echo $type. ': '.$msg.' in'.$file. ' on line'. $line;
    exit;
}

error_reporting(E_ALL & ~E_WARNING); // this  ~E_WARNING to escape warning error
//echo $x;
/*
// out put is noting b/c $x is not defined (warning error);

//if we set error reporting like this= error_reporting(E_ALL) then the output is

Warning: Undefined variable $x in C:\wamp64\www\tech_with_berhan\Full_PHP_Tutorial\Basic_PHP_Procedural\23_PHP_error_handling.php on line 49
*/

set_error_handler('errorHandler',E_ALL);  
echo $x;
/*
//out put of echo $type. ': '.$msg.' in'.$file. ' on line'. $line;
    
2: Undefined variable $x inC:\wamp64\www\tech_with_berhan\Full_PHP_Tutorial\Basic_PHP_Procedural\23_PHP_error_handling.php on line59

*/


/*
echo $y 
*/
/*
 //output of this is not rewrite by user b/c //set_error_handler is not work for syntax error.
Parse error: syntax error, unexpected end of file, expecting "," or ";" in C:\wamp64\www\tech_with_berhan\Full_PHP_Tutorial\Basic_PHP_Procedural\23_PHP_error_handling.php on line 67
*/
