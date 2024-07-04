<?php

//Basic_Syntax

echo 'Hello world';   // Hello world
print 'Hello world';  // Hello world     ' print' is return 1
echo print 'Hello world'; // out put = 1  b/c of print is return 1 
echo ('Hello world'); // Hello world
print ('Hello world'); // Hello world
echo 'Hello', ' ', 'world';  // Hello world    also we can use for 'print'
echo 'Hello'. ' '. 'world';  //Hello world
echo "berhan's Invoice"; // berhan's Invoice
echo 'berhan\'s Invoice'; // berhan's Invoice
//variable_Syntax
$num = '12';   // correct
$_24num='12';  // correct  it must be start from '_' or alphabet.

$x=1;
$y=$x;
$x=3;
echo $y; // 1
$x=1;
$y=&$x;
$x=5;  
echo $y; // 5


$name='berhan';
echo 'Hello $name'; // Hello $name
echo 'Hello'.$name; // Hello berhan
echo 'Hello',$name; // Hello berhan
echo "Hello $name"; // Hello berhan
echo "Hello {$name}"; // Hello berhan
$lname ='teshale';
$fullname=$name. ' ' . $lname; // but this is not work for  $fullname=$name, ' ' , $lname;
echo $fullname; // berhan teshale
echo $name, ' ' , $lname; // berhan teshale
?>
<?= 'Hello world'  //Hello world   this equal to <?php echo 'Hello world'\?\> ?> 