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

//$name{1} = 'i'; // the same as $name[1] = 'i'
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
 
// Add space at the specified index
$s="theare";
$index=3;
echo $newstring= substr($s, 0, $index) . " " . substr($s, $index);//the are
$array=['get','done','they'];
$searchWord="th";

foreach ($array as $value) {
    if(str_starts_with($value, $searchWord))
    {
       echo PHP_EOL.$value;//they
    }
}
$m="good things";
echo str_repeat($m,2);//good thingsgood things

echo str_word_count($m);//2
echo strlen($m);//11

$s_s="cczazcc";
 $chars = count_chars($s_s, 1);
 
 print_r($chars);
 /*
 Array
(
    [97] => 1        //a
    [99] => 4       //c
    [122] => 2      //z
)
    */
    echo chr(99);//c
$int=123;
   echo  $reversed = intval(strrev(strval(abs($int)))); //strval() is to change int to string , intval() is to change string to int
    //321  
$klh="01101";
    echo $total_number_of_one = substr_count($klh, '1'); //3

    $roman="IVI";
    $s = strtr($roman,["I"=>"1","V"=>"5","IV"=>"4","VI"=>"6"]);
    echo $s;//41
    echo array_sum(str_split($s));//5

   // $kl = trim(fgets(STDIN)); // Read first string
   // $t = trim(fgets(STDIN)); // Read second string


    $ooo = "abce";

// Convert the string to lowercase to handle uppercase vowels
$ooo = strtolower($ooo);

// Define the vowels
$vowels = ['a', 'e', 'i', 'o', 'u'];

// Count vowels using substr_count
$vowelCount = array_sum(array_map(function($vowel) use ($ooo) {
    return substr_count($ooo, $vowel);
}, $vowels));

echo "The number of vowels in the string is: $vowelCount";


$v_l="klabzsczgj";
echo strpbrk("abs", $v_l); //abs  //   found "abs"
$content = substr($v_l,0, 2);
echo $content . PHP_EOL;//labsczg

$prefix_="absc";
echo strpos($v_l,$prefix_); //2  // b/c the string start from 2 by this prefix 

$arnum=[1,2];
echo implode('', $arnum); //12
?>