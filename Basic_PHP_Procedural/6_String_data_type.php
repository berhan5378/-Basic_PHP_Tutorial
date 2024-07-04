<?php

/* string data type */

$fname='berhan'; // with in a single quote we can't use variable
$lname='teshale';
$fullname="$fname teshale"; 
$name=$fname. ' '. $lname;

echo $fname; // berhan
echo $lname; // teshale
echo $fullname; // berhan teshale
echo $name; // berhan teshale
echo $name[0]; // b
echo $name[-3]; // a    '-3' indicate the second to the last value of string

$name{1} = 'i'; // the same as $name[1] = 'i'
echo $name; // birhan teshale
var_dump($name); // string(14) "birhan teshale"

$name[15] ='i';
var_dump($name);// string(16) "birhan teshale i"

// Heredoc
$text =<<<TEXT
line 1
line 2
line 3
TEXT;
echo $text; // line 1 line 2 line 3         on browser 
echo nl2br($text); // this used for browser to print in different line for each line

$text = <<<TEXT
<div>
    <p>hello</p>
    <p>world</p>
</div>
TEXT;
echo $text; 
/*
output on browser

hello


world

*/

$text =<<<TEXT
line 1 $fname
line 2 $lname
line 3
TEXT;
echo $text; // line 1 berhan line 2 teshale line 3       on browser


// Nowdoc
$text = <<<'TEXT'
line 1
line 2
line 3
TEXT;
echo $text; // line 1 line 2 line 3         on browser 
/*
$text =<<<'TEXT'
line 1 $fname
line 2 $lname
line 3
TEXT;
echo $text; // line 1 $fname line 2 $lname line 3       on browser
*/

$text = <<<'TEXT'
hello world
TEXT;
var_dump($text); // string(11) "hello world"

$text = <<<'TEXT'
   hello world
TEXT;
var_dump($text); // string(14) "   hello world"
 
?>