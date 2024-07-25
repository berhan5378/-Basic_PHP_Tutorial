<?php

/* loops */

//while
$l = 20;
while($l <= 15){
    echo $l++;
}
$l=0;
while(true){
    if($l >= 15){
        break;
    }
    echo $l++;
}
while(true){
    while($l >= 15){
        break 2;      // this break the two loops
    }
    echo $l++;
}
while($l <= 15):
    if($l % 2 ===0){
        $l++;
        continue;
    }
    echo $l++;  // this output excute if the condition is false
endwhile;

// do-while
do{
    echo $l++; // excute at list one statement
}while($l <= 15);

// for loop
for($i=0;$i<15;$i++){
    echo $i; // 01234567891011121314
}
for($i=0;$i<15;print $i, $i++){} //01234567891011121314 
for($i=0; print $i, $i<15; $i++){} //0123456789101112131415

$txt='Hello World';
for($i=0;$i<strlen($txt);$i++){
   echo $txt[$i]; //Hello World
}

$txt=['a','b'];
for($i=0;$i<count($txt);$i++){
   echo $txt[$i]; //ab
}

//foreach
$txts=['a','b'];
foreach($txts as $txt){
    echo $txt;//ab
}

foreach($txts as $key => $txt){
    echo $key. ' '. $txt;//1a 2b
}

foreach($txts as $key => &$txt){
     $txt='php';
}

print_r($txts);// Array([0] => php [1] => php)

$txts=['a','b'];
foreach($txts as $key => &$txt){
}
$txt='php';
print_r($txts);// Array([0] => a [1] => php)

$txts=['a','b'];
foreach($txts as $key => &$txt){
}
unset($txt);
$txt='php';
print_r($txts);// Array([0] => a [1] => b)


?>