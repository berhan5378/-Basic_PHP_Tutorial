<?php
declare(strict_types=1);  // to strict data types
//return ,goto
/*
function sum(int $x , int $y){
    $z=$x+$y;

    return $z;
}
echo sum(5,10); 
echo "\nhello world";
// out put
//15
//hello world 


function sums(int $x , int $y){
    $z=$x+$y;

    return $z;
}
echo sums(5,10); 

return;

echo "\nhello world";
//  out put
// 15  b/c the out side return stop the excutation bleow return
*/

// declare
/*
function onTick(){
    echo 'Tick'."\n";
}

register_tick_function('onTick');
declare(ticks=1);
 
$i=0;
$length=10;

while($i<$length){
    echo $i++ ."\n";
}
/* out put 
Tick
Tick
Tick
0
Tick
1
Tick
2
Tick
3
Tick
4
Tick
5
Tick
6
Tick
7
Tick
8
Tick
9
Tick
Tick
*/

function onTick(){
    echo 'Tick'."\n";
}

register_tick_function('onTick');
declare(ticks=3);
 
$i=0;
$length=10;

while($i<$length){
    echo $i++ ."\n";
}
/* out put 
Tick
0
1
2
Tick
3
4
5
Tick
6
7
8
Tick
9
*/
?>